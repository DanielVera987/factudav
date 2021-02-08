<?php

namespace App\Http\Controllers;

use App\Models\Bussine;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => ['required', 'string' ,'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'stock' => ['required', 'numeric', 'max:255'],
            'alert_stock' => ['required', 'numeric', 'max:255'],
            'cost' => ['required', 'numeric', 'max:255'],
            'price' => ['required', 'numeric', 'max:255'],
            'tax_id' => ['required', 'numeric', 'max:255'],
            'image' => ['required', 'image'],
            'is_active' => ['required']
        ]);

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
    public function show($id)
    {
        $product = Product::findOrFail($id);

        //return view('products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => ['required', 'string' ,'max:255'],
            'name' => ['required', 'string', 'max:255'], 
            'description' => ['required', 'string', 'max:255'],
            'stock' => ['required', 'numeric', 'max:255'],
            'alert_stock' => ['required', 'numeric', 'max:255'],
            'cost' => ['required', 'numeric', 'max:255'],
            'price' => ['required', 'numeric', 'max:255'],
            'tax_id' => ['required', 'numeric', 'max:255'],
            'image' => ['image'],
            'is_active' => ['required']
        ]);

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
            $product->delete();

            return redirect(route('products.index'))->with('success', 'Producto Eliminado'); 
        }
    }
}
