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

        $bussineId = $this->createBussine($request);

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
        $bussine = Bussine::findOrFail($id);
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'bussine_name' => 'required|string|max:255',
            'tradename' => 'required|string|max:255',
            'rfc' => 'required|string|max:255',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            'type_person' => 'required|string',
            'taxregimen_id' => 'required|numeric',
            'country_id' => 'required|numeric',
            'state_id' => 'required|numeric',
            'municipality_id' => 'required|numeric',
            'location' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'colony' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'no_exterior' => 'required|string|max:255',
            'no_inside' => 'required|string|max:255',
            'certificate' => 'max:255', //file .cer
            'key_private' => 'max:255', //file .key
            'password' => 'max:255',
            'name_pac' => 'max:255',
            'password_pac' => 'max:255',
            'logo' => 'image',
        ]);

        $bussine = Bussine::findOrFail($id);
        $bussine->bussine_name = $request->bussine_name;
        $bussine->tradename = $request->tradename;
        $bussine->rfc = $request->rfc;
        $bussine->email = $request->email;
        $bussine->telephone = $request->telephone;
        $bussine->type_person = $request->type_person;
        $bussine->taxregimen_id = $request->taxregimen_id;
        $bussine->country_id = $request->country_id;
        $bussine->state_id = $request->state_id;
        $bussine->municipality_id = $request->municipality_id;
        $bussine->location = $request->location;
        $bussine->street = $request->street;
        $bussine->colony = $request->colony;
        $bussine->zip = $request->zip;
        $bussine->no_exterior = $request->no_exterior;
        $bussine->no_inside = $request->no_inside;
        $bussine->certificate = $request->certificate;
        $bussine->key_private = $request->key_private;
        $bussine->password = $request->password;
        $bussine->name_pac = $request->name_pac;
        $bussine->password_pac = $request->password_pac;

        if ($request->hasFile('logo')) {
            $nameImgPrevius = $bussine->logo;
            unlink(public_path() . '/images/logos/' . $nameImgPrevius);

            $file = $request->file('logo');
            $nameFile = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images/logos'), $nameFile);
            $bussine->logo = $nameFile;
        }

        $result = $bussine->save();

        return redirect()->route('settings.edit', $id)->with('message', 'Datos Guardados');
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

    protected function createBussine($request)
    {
        $bussine = new Bussine();
        $bussine->bussine_name = $request->bussine_name;
        $bussine->tradename = $request->tradename;
        $bussine->rfc = $request->rfc;
        $bussine->email = $request->email;
        $bussine->telephone = $request->telephone;
        $bussine->type_person = $request->type_person;
        $bussine->taxregimen_id = $request->taxregimen_id;
        $bussine->country_id = $request->country_id;
        $bussine->state_id = $request->state_id;
        $bussine->municipality_id = $request->municipality_id;
        $bussine->location = $request->location;
        $bussine->street = $request->street;
        $bussine->colony = $request->colony;
        $bussine->zip = $request->zip;
        $bussine->no_exterior = $request->no_exterior;
        $bussine->no_inside = $request->no_inside;
        $bussine->certificate = $request->certificate;
        $bussine->key_private = $request->key_private;
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
            'tradename' => 'required|string|max:255',
            'rfc' => 'required|string|max:255',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            'type_person' => 'required|string',
            'taxregimen_id' => 'required|numeric',
            'country_id' => 'required|numeric',
            'state_id' => 'required|numeric',
            'municipality_id' => 'required|numeric',
            'location' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'colony' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'no_exterior' => 'required|string|max:255',
            'no_inside' => 'required|string|max:255',
            'certificate' => 'max:255', //file .cer
            'key_private' => 'max:255', //file .key
            'password' => 'max:255',
            'name_pac' => 'max:255',
            'password_pac' => 'max:255',
            'logo' => 'image',
        ]);
    }
}
