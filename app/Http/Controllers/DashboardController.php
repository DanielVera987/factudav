<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->verifyCompleteConfiguration();
    }

    private function verifyCompleteConfiguration()
    {
        $user = Auth::user();
        if ($user->bussine_id == null) {
            return redirect(route('settings.create'));
        }

        return view('/dashboard');
    }
}
