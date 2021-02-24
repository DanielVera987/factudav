<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Models\State;
use App\Models\Bussine;
use App\Models\Country;
use App\Models\Currency;
use App\Models\TaxRegimen;
use App\Models\Municipality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BussineRequest;
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
        return redirect()->route('home');
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
    public function store(BussineRequest $request)
    {
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $nameFile = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images/logos'), $nameFile);
            $request->logo = $nameFile;
        }

        $bussineId = $this->createBussine($request);

        Auth::user()->bussine_id = $bussineId;
        Auth::user()->save();

        return redirect()->route('settings.edit', $bussineId)->with('success', 'Datos Guardados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bussine  $bussine
     * @return \Illuminate\Http\Response
     */
    public function show(Bussine $bussine)
    {
        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bussine  $bussine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bussine = Bussine::with('tax', 'currency')->findOrFail($id);
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
     * @param  \Illuminate\Http\Requests\BussineRequest  $request
     * @param  \App\Models\Bussine  $bussine
     * @return \Illuminate\Http\Response
     */
    public function update(BussineRequest $request, $id)
    {
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
        $bussine->start_folio = $request->folio;
        $bussine->start_serie = $request->serie;
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

        if ($request->hasFile('certificate') && $request->hasFile('key_private')) {
            $nameFileCer = $this->uploadFileCer($request);
            $nameFileKey = $this->uploadFileKey($request);

            if(!$nameFileCer) return back()->with(['warning' => 'El campo Certificado debe ser un archivo de tipo .cer']);
            if(!$nameFileKey) return back()->with(['warning' => 'El campo Llave Privada debe ser un archivo de tipo .key']);
            
            $bussine->key_private = $nameFileKey;
            $bussine->certificate = $nameFileCer;
        }

        $bussine->save();

        Currency::isCurrency($request, $id);
        Tax::isTax($request, $id);

        return redirect()->route('settings.edit', $id)->with('success', 'Datos Guardados');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bussine  $bussine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bussine $bussine)
    {
        return redirect()->route('home');
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
        $bussine->start_folio = $request->folio;
        $bussine->start_serie = $request->serie;
        $bussine->certificate = $request->certificate;
        $bussine->key_private = $request->key_private;
        $bussine->password = $request->password;
        $bussine->name_pac = $request->name_pac;
        $bussine->password_pac = $request->password_pac;
        $bussine->logo = $request->logo;
        $result = $bussine->save();

        Currency::isCurrency($request, $bussine->id);
        Tax::isTax($request, $bussine->id);

        return ($result)
            ? $bussine->id
            : redirect()->route('settings.create')->with('success', 'Error al guardar los datos');       
    }   

    protected function uploadFileCer($request)
    {
        $ext = $request->file('certificate')->getClientOriginalExtension();
        if ($ext != 'cer') return false;

        $fileCer = $request->file('certificate');
        $nameFileCer = time().'_'.$request->rfc.'.cer';
        Storage::disk('certificate')->put($nameFileCer, File::get($fileCer));

        return $nameFileCer;
    }

    protected function uploadFileKey($request)
    {
        $ext = $request->file('key_private')->getClientOriginalExtension();
        if ($ext != 'key') return false;

        $fileKey = $request->file('key_private');
        $nameFileKey = time().'_'.$request->rfc.'.key';
        Storage::disk('key')->put($nameFileKey, File::get($fileKey));

        return $nameFileKey;
    }
}
