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
        if ($this->checkRepeatingCode($request['code'])) {
            return back()->with('warning', 'El codigo del producto ya esta en uso');
        } 

        if ($request->stock <= $request->alert_stock) {
            return back()->with('warning', 'El stock debe ser mayor a la alerta de stock');
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

    protected function checkRepeatingCode($code)
    {
        $existFolio = Product::where('bussine_id', Auth::user()->bussine_id)
                        ->where('code', intval($code))
                        ->count();
        return ($existFolio > 0) ? true : false;
    }
}
