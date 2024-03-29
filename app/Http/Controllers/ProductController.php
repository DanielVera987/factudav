<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Models\Unit;
use App\Models\Bussine;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductUpdateRequest;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bussine.complete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('bussine_id', Auth::user()->bussine_id)->get();
        return view('products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create', [
            'folio' => Product::generateFolio()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        if ($this->checkRepeatingCode($request['code'])) {
            return back()->with('warning', 'El codigo del producto ya esta en uso');
        } 

        if ($request->stock <= $request->alert_stock) {
            return back()->with('warning', 'El stock debe ser mayor a la alerta de stock');
        }

        $request['bussine_id'] = Auth::user()->bussine_id;
        
        $product = Product::create($request->all());
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $nameFile = time().'_'.$image->getClientOriginalName();
            Storage::disk('products')->put($nameFile, File::get($image));

            $image = Product::find($product->id);
            $image->image = $nameFile;
            $image->save();
        }
        
        return redirect(route('products.index'))->with('success', 'Producto Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        if($product->bussine_id != Auth::user()->bussine_id) {
            return abort(404);
        }

        $produ = [];
        $produ['name'] = $product->name;    
        $produ['description'] = $product->description;
        $produ['price'] = $product->price;
        $produ['produserv_id'] = $product->produserv_id;
        $produ['produserv_code'] = $product->produserv->code;
        $produ['produserv_name'] = $product->produserv->name;
        $produ['unit_id'] = $product->unit_id;
        $produ['unit_code'] = $product->unit->code;
        $produ['unit_name'] = $product->unit->name;

        return $produ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('unit')->where('bussine_id', Auth()->user()->bussine_id)->findOrFail($id);

        return view('products.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        if ($this->checkRepeatingCode($request['code'], $id)) {
            return back()->with('warning', 'El codigo del producto ya esta en uso');
        } 

        if ($request->stock <= $request->alert_stock) {
            return back()->with('warning', 'El stock debe ser mayor a la alerta de stock');
        }

        if(!isset($request->is_active)) {
            $request['is_active'] = null;
        }

        $product = Product::findOrFail($id);
        $imgPrevius = $product->image;

        $product->update($request->all());

        if ($request->hasFile('image')) {
            //delete previous image
            if (Storage::disk('products')->exists($imgPrevius) && $imgPrevius != 'default.png') {
                Storage::disk('products')->delete($imgPrevius);
            }

            //update new image
            $image = $request->file('image');
            $nameFile = time().'_'.$image->getClientOriginalName();
            $product->image = $nameFile;    
            $product->update();
            Storage::disk('products')->put($nameFile, File::get($image));
        }

        return redirect(route('products.index'))->with('success', 'Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->bussine_id == Auth::user()->bussine_id) {
            if (Storage::disk('products')->exists($product->image) && $product->image != 'default.png') {
                Storage::disk('products')->delete($product->image);
            }

            $product->delete();

            return redirect(route('products.index'))->with('success', 'Producto Eliminado'); 
        }
    }

    /**
     * Check if code the product repeats
     *
     * @param [type] $code
     * @return void
     */
    protected function checkRepeatingCode($code, $id = '')
    {
        $existFolio = Product::where('bussine_id', Auth::user()->bussine_id)
                        ->where('code', intval($code))
                        ->count();
        
        if($id != '') { //If the empty id is not empty, use the update
            $product = Product::where('bussine_id', Auth::user()->bussine_id)
                            ->findOrFail($id);
            $existFolio = ($product->code == $code) ? 0 : $existFolio;
        }

        return ($existFolio > 0) ? true : false;
    }

    /**
     * Export file CVS
     */
    public function exportCVS()
    {
        $fileName = 'ProductBackUp.csv';
        $products = Product::with('unit', 'produserv')->where('bussine_id', Auth::user()->bussine_id)->get();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Codigo', 'Nombre', 'Stock', 'Precio', 'Costo', 'Clave Sat', 'Unidad Sat');

        $callback = function() use($products, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($products as $product) {
                $row['Codigo']     = $product->code;
                $row['Nombre']     = $product->name;
                $row['Stock']      = $product->stock;
                $row['Precio']     = $product->price;
                $row['Costo']      = $product->cost;
                $row['Clave Sat']  = '['.$product->unit->code.']'.'-'.$product->unit->name;
                $row['Unidad Sat'] = '['.$product->produserv->code.']'.'-'.$product->produserv->name;

                fputcsv($file, array($row['Codigo'], $row['Nombre'], $row['Stock'], $row['Precio'], $row['Costo'], $row['Clave Sat'], $row['Unidad Sat']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
