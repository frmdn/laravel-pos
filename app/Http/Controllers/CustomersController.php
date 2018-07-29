<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function index()
    {
    	$data = Customer::all();
    	return view('customer.index', compact('data'));
    }

    public function show($id)
    {
    	$data = Customer::find($id);
    	return view('customer.show', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Customer;
        $data->name = request('name');
        $data->phone = request('phone');
        $data->email = request('email');
        $data->alamat = request('alamat');
        $data->save();

        return redirect('/customers');
    }
}
