<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Country;
use App\Models\Usecfdi;
use App\Models\Customer;
use App\Models\TaxRegimen;
use App\Models\Municipality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CustomerRequest;

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
    public function store(CustomerRequest $request)
    {       
        $bussine_id = Auth::user()->bussine_id;
        $request['bussine_id'] = $bussine_id;
        $request['type'] = 1;

        Customer::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Cliente Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        if($customer->bussine_id != Auth::user()->bussine_id) {
            return abort(404);
        }

        $cust = [];
        $cust['rfc'] = $customer->rfc;
        $cust['bussine_name'] = $customer->bussine_name;
        $cust['zip'] = $customer->zip;
        $cust['street'] = $customer->street;
        $cust['no_exterior'] = $customer->no_exterior;
        $cust['no_inside'] = $customer->no_inside;
        $cust['state'] = $customer->state->name;

        $munici = Municipality::find($customer->municipality_id);
        $cust['municipality'] = $munici->name;
        
        return $cust;
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
    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Cliente Actualizado');
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
        return redirect()->route('customers.index')->with('success', 'Cliente Eliminado');
    }
}
