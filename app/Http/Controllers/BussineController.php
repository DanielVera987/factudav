<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Bussine;
use App\Models\Country;
use App\Models\TaxRegimen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Municipality;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BussineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bussine.create')->only(['create', 'store']);
        $this->middleware('bussine.edit')->only(['edit', 'update']);
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
        $contries = Country::all();
        $states = State::all();
        $tax_regimens = TaxRegimen::all();

        return view('bussine.create', [
            'contries' => $contries,
            'states' => $states,
            'tax_regimens' => $tax_regimens,
        ]);
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

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $nameFile = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images/logos'), $nameFile);
            $request->logo = $nameFile;
        }

        $bussineId = $this->createOrUpdate($request);

        Auth::user()->bussine_id = $bussineId;
        Auth::user()->save();

        return redirect()->route('settings.edit', $bussineId)->with('message', 'Datos Guardados');
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
    public function edit($id)
    {
        $bussine = Bussine::find($id);
        $contries = Country::all();
        $states = State::all();
        $municipalities = Municipality::where('state_id', $bussine->state_id)->get();
        $tax_regimens = TaxRegimen::all();

        return view('bussine.edit', [
            'contries' => $contries,
            'states' => $states,
            'municipalities' => $municipalities,
            'tax_regimens' => $tax_regimens,
            'bussine' => $bussine
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bussine  $bussine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bussine)
    {
        $this->validator($request);
        
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $nameFile = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images/logos'), $nameFile);
            $request->logo = $nameFile;
        }
        
        $bussine = $this->createOrUpdate($request);

        return redirect()->route('settings.edit', $bussine)->with('message', 'Datos Actualizados');
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

    protected function createOrUpdate($request)
    {
        $bussine = new Bussine;
        $bussine->bussine_name = $request->bussine_name;
        $bussine->tradename = $request->tradaname;
        $bussine->rfc = $request->rfc;
        $bussine->email = $request->email;
        $bussine->telephone = $request->phone;
        $bussine->type_person = $request->type_person;
        $bussine->taxregimen_id = $request->taxregimen;
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
        $result = $bussine->save();

        return ($result)
            ? $bussine->id
            : redirect()->route('settings.create')->with('message', 'Error al guardar los datos');
            
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
            'taxregimen' => 'required|numeric',
            'country' => 'required|numeric',
            'state' => 'required|numeric',
            'municipality' => 'required|numeric',
            'location' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'colony' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'noexterior' => 'required|string|max:255',
            'nointerior' => 'required|string|max:255',
            'certificate' => 'max:255', //file .cer
            'privatekey' => 'max:255', //file .key
            'password' => 'max:255',
            'name_pac' => 'max:255',
            'password_pac' => 'max:255',
            'logo' => 'required|image',
        ]);
    }
}
