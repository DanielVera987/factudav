<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Models\User;
use App\Models\Bussine;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Municipality;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bussine.complete')->except('getMunicipalities');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $alertProduct = Product::checkMinStock();
        $productsMinStock = ($alertProduct) ? Product::getProductMinStock() : '';
        $lastCustomers = Customer::where('bussine_id', Auth::user()->bussine_id)->orderByDesc('id')->take(10)->get();
        $lastProducts = Product::where('bussine_id', Auth::user()->bussine_id)->orderByDesc('id')->take(5)->get();

        $totalsCustomer = Customer::where('bussine_id', Auth::user()->bussine_id)->count();
        $totalsInvoice = Invoice::where('bussine_id', Auth::user()->bussine_id)->count();
        $totalsProduct = Product::where('bussine_id', Auth::user()->bussine_id)->count();

        $completeBussine = Bussine::completeBussine();

        return view('/dashboard', 
            compact('alertProduct', 
                    'totalsCustomer', 
                    'totalsInvoice', 
                    'totalsProduct', 
                    'productsMinStock', 
                    'completeBussine',
                    'lastCustomers',
                    'lastProducts')
        );
    }

    /**
     * Show the municipalities of the state
     */
    public function getMunicipalities($id)
    {
        return response()->json(Municipality::where('state_id', $id)->get());
    }

    public function deleteTax($id) 
    {   
        $tax = Tax::find($id);
        if ($tax && Auth::user()->bussine_id == $tax->bussine_id) {
            $tax->delete();
        }
    }


    public function deleteCurrency($id) 
    {   
        $currency = Currency::find($id);
        if ($currency && Auth::user()->bussine_id == $currency->bussine_id) {
            $currency->delete();
        }
    }
}
