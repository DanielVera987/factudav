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
}
