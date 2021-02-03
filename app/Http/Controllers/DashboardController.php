<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Tax;
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
        return view('/dashboard');
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
