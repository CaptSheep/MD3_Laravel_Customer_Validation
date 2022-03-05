<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormValidation;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers =Customer::all();
        return view('backend.list',compact('customers'));
    }


    public function create()
    {
        return view('backend.create');
    }

    public function store(FormValidation $request)
    {
        $customers = new Customer();
        $customers->name = $request->input('name');
        $customers->email = $request->input('email');
        $customers->phone = $request->input('phone');
        $customers->address = $request->input('address');
        $customers->save();
        return redirect()->route('index');
    }


    public function show($id)
    {
        $customers = Customer::all()->where('id',$id);
        return view('backend.detail',compact('customers'));
    }


    public function edit($id)
    {
        $customers = Customer::all()->where('id',$id)->first();
        return view('backend.edit',compact('customers'));
    }


    public function update(FormValidation $request, $id)
    {
        $customers = Customer::all()->where('id',$id)->first();
        $customers->name = $request->input('name');
        $customers->email = $request->input('email');
        $customers->phone = $request->input('phone');
        $customers->address = $request->input('address');
        $customers->save();
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()->route('index');
    }
}
