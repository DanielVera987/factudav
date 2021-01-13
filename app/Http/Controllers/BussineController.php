<?php

namespace App\Http\Controllers;

use App\Models\Bussine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $bussine = new Bussine;
        $bussine->bussine_name = $request->bussine_name;
        $bussine->tradename = $request->tradaname;
        $bussine->rfc = $request->rfc;
        $bussine->email = $request->email;
        $bussine->telephone = $request->phone;
        $bussine->type_person = $request->type_person;
        $bussine->taxregime_id = $request->taxregimen;
        $bussine->country_id = $request->country;
        $bussine->state_id = $request->state;
        $bussine->municipality_id = $request->municipality;
        $bussine->location = $request->location;
        $bussine->street = $request->street;
        $bussine->colony = $request->colony;
        $bussine->zip = $request->zip;
        $bussine->no_exterior = $request->noexterior;
        $bussine->no_inside = $request->nointerior;
        $bussine->certificate = $request->certificate;
        $bussine->key_private = $request->privatekey;
        $bussine->password = $request->password;
        $bussine->name_pac = $request->name_pac; 
        $bussine->password_pac = $request->password_pac; 
        $bussine->logo = $request->logo;
        $bussine->save();

        Auth::user()->bussine_id = $bussine->id;
        Auth::user()->save();

        return redirect()->route('settings.create')->with('Datos Guardados');
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
            'certificate' => 'max:255', //file .cer
            'privatekey' => 'max:255', //file .key
            'password' => 'max:255',
            'name_pac' => 'max:255',
            'password_pac' => 'max:255',
            'logo' => '' // file jpg, jpge, png
        ]);
    }
}
