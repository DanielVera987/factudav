<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Bussine;
use App\Models\Invoice;
use App\Models\Currency;
use App\Models\Municipality;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bussine.complete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::with('customer')->where('bussine_id', Auth::user()->bussine_id)->get();
        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currencies = Currency::where('bussine_id', Auth::user()->bussine_id)->get();
        $states = State::where('country_id', 1)->get();

        return view('invoices.create', [
            'currencies' => $currencies,
            'states' => $states,
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
        $request->validate([
            'folio' => ['required', 'string', 'max:255', 'unique:invoices,folio'],
            'way_to_pay' => ['required', 'numeric', 'max:255'],
            'currency_id' => ['required', 'numeric', 'max:255'],
            'payment_method_id' => ['required', 'numeric','max:255'],
            'usecfdi_id' => ['required', 'numeric', 'max:255'],
            'date' => ['required', 'date'],
            'customer_id.*' => ['required', 'numeric'],
            'product_id.*' => ['required', 'numeric'],
            'prodserv_id.*' => ['required', 'numeric'],
            'key_unit_id.*' => ['required', 'numeric'],
            'description.*' => ['required', 'string', 'max:255'],
            'quantity.*' => ['required', 'numeric'],
            'discount.*' => ['required', 'numeric'],
            'amount.*' => ['required', 'numeric']
        ]);
        $request['bussine_id'] = Auth::user()->bussine_id;

        $invoice = Invoice::create($request->all());

        Detail::createDetail($invoice->id, $request);

        return redirect()->route('invoices.index')->with(['success', 'Factura Creada']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* $request->validate([
            'folio' => ['required', 'string', 'max:255', 'unique:invoices,folio'],
            'way_to_pay' => ['required', 'numeric', 'max:255'],
            'currency_id' => ['required', 'numeric', 'max:255'],
            'payment_method_id' => ['required', 'numeric','max:255'],
            'usecfdi_id' => ['required', 'numeric', 'max:255'],
            'date' => ['required', 'date'],
            'customer_id.*' => ['required', 'numeric'],
            'product_id.*' => ['required', 'numeric'],
            'prodserv_id.*' => ['required', 'numeric'],
            'key_unit_id.*' => ['required', 'numeric'],
            'description.*' => ['required', 'string', 'max:255'],
            'quantity.*' => ['required', 'numeric'],
            'discount.*' => ['required', 'numeric'],
            'amount.*' => ['required', 'numeric']
        ]);
        $bussine_id = Auth::user()->bussine_id;

        $invoices = Invoice::where('bussine_id', $bussine_id)->findOrFail($id);
        $invoices->update($request->all());
 */
        //programar en el modelo de detalles que actualice cada producto que se haya agregado
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
