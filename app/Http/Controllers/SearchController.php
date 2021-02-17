<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Product;
use App\Models\Customer;
use App\Models\ProduServ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bussine.complete');
    }

    public function searchUnits(Request $request)
    {
        $units = [];

        if ($request->has('q')) {
            $search = $request->q;
            $units = Unit::select('id', 'name', 'code')
                     ->where('name', 'LIKE', "%$search%")
                     ->orWhere('code', 'LIKE', "%$search%")
                     ->get();
        }
        return response()->json($units);
    }

    public function searchCustomers(Request $request)
    {
        $customers = [];

        if ($request->has('q')) {
            $search = $request->q;
            $customers = Customer::select('id', 'bussine_name')
                     ->where('bussine_id', Auth::user()->bussine_id)
                     ->where('bussine_name', 'LIKE', "%$search%")
                     ->orWhere('rfc', 'LIKE', "%$search%")
                     ->orWhere('tradename', 'LIKE', "%$search%")
                     ->get();
        }
        return response()->json($customers);
    }

    public function searchProducts(Request $request)
    {
        $products = [];

        if ($request->has('q')) {
            $search = $request->q;
            $products = Product::select('id', 'name', 'description', 'price')
                     ->where('bussine_id', Auth::user()->bussine_id)
                     ->where('name', 'LIKE', "%$search%")
                     ->orWhere('code', 'LIKE', "%$search%")
                     ->get();
        }
        return response()->json($products);
    }

    public function searchProduServ(Request $request)
    {
        $produserv = [];

        if ($request->has('q')) {
            $search = $request->q;
            $produserv = ProduServ::select('id', 'code', 'name')
                     ->where('code', 'LIKE', "%$search%")
                     ->orWhere('name', 'LIKE', "%$search%")
                     ->orWhere('similarwords', 'LIKE', "%$search%")
                     ->take(100)
                     ->get();
        }
        return response()->json($produserv);
    }

    public function convertDetailHtml(Request $request) 
    {
        /* 
            description: "coca bien fria"
            discount: "0"
            numDetail: 1
            price: "35"
            product_id: "2"
            produserv_id: "26715"
            quantity: "1"
            taxes: Array(2)
                0: "1"
                1: "2"
            unit_id: "1070"
        */
        $data = $request;
        if ( is_numeric(intval( $data['product_id'] )) ) {
            $produc = Product::where('bussine_id', Auth::user()->bussine_id)->find($data['product_id']);
            if (! $produc) return abort(404);
        }
        $unit = Unit::find($data['unit_id']);
        $producServ = ProduServ::find($data['produserv_id']);
        $importe = intval($data['quantity']) * intval($data['price']);

        $response = "
            <div class='x_panel'>
                <div class='x_title'>
                    <h2><strong>{$data['description']}</strong></h2>
                    <ul class='nav navbar-right panel_toolbox'>
                        <li class='bg bg-red' onclick='$(this).parent().parent().parent().remove(); calculate_totals()'><a class='close-link'><i class='fa fa-close'></i></a></li>
                    </ul>
                    <div class='clearfix'></div>
                </div>
                <div class='x_content'>
                    <div class='row'>
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h6><strong>Clave prod/serv:</strong> {$producServ->code} - {$producServ->name} </h6>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h6><strong>Cantidad:</strong> {$data['quantity']}</h6>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h6><strong>Descuento:</strong> {$data['discount']}</h6>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h6><strong>Clave unidad: </strong> {$unit->code} - {$unit->name}</h6>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h6><strong>Precio: </strong> $ {$data['price']}</h6>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h6><strong>Importe: </strong> $ {$importe}</h6>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12'>
                            <h6><strong>Impuestos: </strong> 002 iva trasladado (Traslado 0.160000 Tasa)</h6>
                        </div>
                    </div>
                    <input type='hidden' name='detail[{$data['numDetail']}][discount]'    id='detail[{$data['numDetail']}][discount]'    class='discount_hidden'    value='{$data['discount']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][amount]'      id='detail[{$data['numDetail']}][amount]'      class='amount_hidden'      value='{$data['price']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][product_id]'  id='detail[{$data['numDetail']}][product_id]'  class='product_id_hidden'  value='{$data['product_id']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][prodserv_id]' id='detail[{$data['numDetail']}][prodserv_id]' class='prodserv_id_hidden' value='{$data['produserv_id']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][unit_id]'     id='detail[{$data['numDetail']}][unit_id]'     class='unit_id_hidden'     value='{$data['unit_id']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][description]' id='detail[{$data['numDetail']}][description]' class='description_hidden' value='{$data['description']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][quantity]'    id='detail[{$data['numDetail']}][quantity]'    class='quantity_hidden'    value='{$data['quantity']}' />

                    <input type='hidden' name='detail[{$data['numDetail']}].taxes[][type]'   id='detail[{$data['numDetail']}].taxes[][type]'   class='tax_type_hidden'   value='' />
                    <input type='hidden' name='detail[{$data['numDetail']}].taxes[][factor]' id='detail[{$data['numDetail']}].taxes[][factor]' class='tax_factor_hidden' value='' />
                    <input type='hidden' name='detail[{$data['numDetail']}].taxes[][tasa]'   id='detail[{$data['numDetail']}].taxes[][tasa]'   class='tax_tasa_hidden'   value='' />
                    <input type='hidden' name='detail[{$data['numDetail']}].taxes[][name]'   id='detail[{$data['numDetail']}].taxes[][name]'   class='tax_name_hidden'   value='' />

                </div>
            </div>
        ";
        return $response;
    }
}
