<?php

namespace App\Http\Controllers;

use App\Models\Bussine;
use Illuminate\Http\Request;

class BussineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bussine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request);

        dd('PASE');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bussine  $bussine
     * @return \Illuminate\Http\Response
     */
    public function show(Bussine $bussine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bussine  $bussine
     * @return \Illuminate\Http\Response
     */
    public function edit(Bussine $bussine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bussine  $bussine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bussine $bussine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bussine  $bussine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bussine $bussine)
    {
        //
    }

    protected function validator(Request $data)
    {
        return $data->validate([
            'bussine_name' => 'required|string|max:255',
            'tradaname' => 'required|alpha|max:255',
            'rfc' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'type_person' => 'required|string',
            'taxregimen' => 'required',
            'country' => 'required',
            'state' => 'required',
            'municipality' => 'required',
            'location' => 'required',
            'street' => 'required',
            'colony' => 'required',
            'zip' => 'required',
            'noexterior' => 'required',
            'nointerior' => 'required',
            'centificate' => '',
            'privatekey' => '',
            'password' => '',
            'name_pac' => '',
            'password_pac' => ''
        ]);
    }
}
