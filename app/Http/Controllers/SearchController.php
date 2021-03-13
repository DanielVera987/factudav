<?php

namespace App\Http\Controllers;

use App\Models\Tax;
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
        $data = $request;
        if ( is_numeric(intval( $data['product_id'] )) && $data['product_id'] > 0) {
            $produc = Product::where('bussine_id', Auth::user()->bussine_id)->find($data['product_id']);
            if (! $produc) return abort(404);
            if($produc->stock < $data['quantity']) {
                return 0;
            }
        }
        $unit = Unit::find($data['unit_id']);
        $producServ = ProduServ::find($data['produserv_id']);
        $importe = intval($data['quantity']) * round($data['price'], 2);
        $importe = $importe - round($data['discount']);

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
                        </div>";

        if (isset($data['taxes'])) {
            $taxes = $data['taxes'];
            $response .= "<div class='col-md-12 col-sm-12 col-xs-12'><h6><strong>Impuestos: </strong></h6></div>";
            foreach($taxes as $key => $value) {
                $tax = Tax::where('bussine_id', Auth::user()->bussine_id)->find($value);
                $response .= "<div class='col-md-12 col-sm-12 col-xs-12'>
                                <p> {$tax->code} {$tax->name} ({$tax->type} {$tax->tasa} {$tax->factor})</p>
                              </div>";
            }
        }

        $response .= "</div>
                    <input type='hidden' name='detail[{$data['numDetail']}][discount]'    id='detail[][discount]'    class='discount_hidden'    value='{$data['discount']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][amount]'      id='detail[][amount]'      class='amount_hidden'      value='{$data['price']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][product_id]'  id='detail[][product_id]'  class='product_id_hidden'  value='{$data['product_id']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][prodserv_id]' id='detail[][prodserv_id]' class='prodserv_id_hidden' value='{$data['produserv_id']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][unit_id]'     id='detail[][unit_id]'     class='unit_id_hidden'     value='{$data['unit_id']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][description]' id='detail[][description]' class='description_hidden' value='{$data['description']}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][quantity]'    id='detail[][quantity]'    class='quantity_hidden'    value='{$data['quantity']}' />";

        if (isset($data['taxes'])) {
            $taxes = $data['taxes'];

            foreach($taxes as $key => $value) {
                $tax = Tax::where('bussine_id', Auth::user()->bussine_id)->find($value);
                $response .= "
                    <input type='hidden' name='detail[{$data['numDetail']}][taxes][{$key}][type]'   id='detail[{$data['numDetail']}][taxes][{$key}][type]'   class='tax_type_hidden'   value='{$tax->type}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][taxes][{$key}][factor]' id='detail[{$data['numDetail']}][taxes][{$key}][factor]' class='tax_factor_hidden' value='{$tax->factor}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][taxes][{$key}][tasa]'   id='detail[{$data['numDetail']}][taxes][{$key}][tasa]'   class='tax_tasa_hidden'   value='{$tax->tasa}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][taxes][{$key}][tax]'    id='detail[{$data['numDetail']}][taxes][{$key}][tax]'    class='tax_name_hidden'   value='{$tax->tax}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][taxes][{$key}][code]'   id='detail[{$data['numDetail']}][taxes][{$key}][code]'   class='tax_code_hidden'   value='{$tax->code}' />
                    <input type='hidden' name='detail[{$data['numDetail']}][taxes][{$key}][id]'     id='detail[{$data['numDetail']}][taxes][{$key}][id]'     class='tax_id_hidden'   value='{$tax->id}' />
                    <input type='hidden' class='importeconcepto' value='{$importe}' />";
            }
        }

        $response .= "
                </div>
            </div>
        ";
        return $response;
    }
}
