<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use Illuminate\Http\Request;
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
        $this->middleware(['auth', 'bussine.complete'])->except('getMunicipalities');
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
}
