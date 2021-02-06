<?php

namespace App\Http\Controllers;

use App\Models\Bussine;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'image' => ['required'],
            'is_active' => ['required']
        ]);

        $request['bussine_id'] = Auth::user()->bussine_id;

        Product::create($request->all());

        //return view('products.index')->with('success', 'Producto Creado');
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
        //
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
            'image' => [''],
            'is_active' => ['required']
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        // return view('products.edit')->with();
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

            //reuturn 
        }
    }
}
