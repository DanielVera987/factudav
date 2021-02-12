<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Country;
use App\Models\Usecfdi;
use App\Models\Customer;
use App\Models\TaxRegimen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
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
        $customers = Customer::with('country', 'state')->where('bussine_id', Auth::user()->bussine_id)->get();
        return view('customer.index', [
            'customers' => $customers
        ]);
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
        $usecfdis = Usecfdi::all();

        return view('customer.create', [
            'contries' => $contries,
            'states' => $states,
            'tax_regimens' => $tax_regimens,
            'usecfdis' => $usecfdis,
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
            'bussine_name' => 'required|string|max:255',
            'tradename' => 'required|string|max:255',
            'rfc' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:customers',
            'telephone' => 'required|string',
            'usecfdi_id' => 'required|numeric',
            'country_id' => 'required|numeric',
            'state_id' => 'required|numeric',
            'municipality_id' => 'required|numeric',
            'location' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'colony' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'no_exterior' => 'required|string|max:255',
            'no_inside' => 'required|string|max:255',
            'street_reference' => 'string|max:255'
        ]);
            
        $bussine_id = Auth::user()->bussine_id;
        $request['bussine_id'] = $bussine_id;
        $request['type'] = 1; //Cliente

        Customer::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Cliente creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $cust = [];
        $cust['rfc'] = $customer->rfc;
        $cust['bussine_name'] = $customer->bussine_name;
        $cust['zip'] = $customer->zip;
        $cust['street'] = $customer->street;
        $cust['no_exterior'] = $customer->no_exterior;
        $cust['no_inside'] = $customer->no_inside;
        $cust['state'] = $customer->state->name;
        $cust['municipality'] = $customer->municipality_id;

        return json_encode($cust, JSON_FORCE_OBJECT);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $contries = Country::all();
        $states = State::all();
        $tax_regimens = TaxRegimen::all();
        $usecfdis = Usecfdi::all();
        
        return view('customer.edit', [
            'contries' => $contries,
            'states' => $states,
            'tax_regimens' => $tax_regimens,
            'usecfdis' => $usecfdis,
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'bussine_name' => 'required|string|max:255',
            'tradename' => 'required|string|max:255',
            'rfc' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:customers,email,'.$customer->id,
            'telephone' => 'required|string',
            'usecfdi_id' => 'required|numeric',
            'country_id' => 'required|numeric',
            'state_id' => 'required|numeric',
            'municipality_id' => 'required|numeric',
            'location' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'colony' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'no_exterior' => 'required|string|max:255',
            'no_inside' => 'required|string|max:255',
            'street_reference' => 'string|max:255'
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Cliente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        if (Auth::user()->bussine_id != $customer->bussine_id) {
            return abort(404);
        }
        
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Cliente eliminado con exito');
    }
}
