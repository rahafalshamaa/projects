<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;



class Customercontroller extends Controller
{
    //
    public function index()
    {
        return view('Customer.add');
    }
    public function store(Request $request)
    {
        $customer =new Customer;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->company_name = $request->company_name;
        $customer->Work_financier = $request->Work_financier;
        $customer->mobile = $request->mobile;
        $customer->phone = $request->phone;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->whatsapp = $request->whatsapp;
        $customer->web = $request->web;
        $customer->facebook = $request->facebook;
        if(isset( $request->image))
        {
            $image_name = rand() . time() . '.' . $request->image->getClientOriginalExtension();
        $customer->image = $image_name;
        $request->image->move('upload/customers', $image_name);

        }
        $customer->save();
        return back();

    }
    public function all()
    {
        $customers =Customer::all();
        return view('customer.all' , compact('customers'));
    }
    public function edit($id)
    {
        $customer=Customer::where('id' , '=' , $id)->first();
        return view('customer.edit' , compact('customer'));

    }
    public function update($id , Request $request)
    {
        $customer = Customer::find($id);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->company_name = $request->company_name;
        $customer->Work_financier = $request->Work_financier;
        $customer->mobile = $request->mobile;
        $customer->phone = $request->phone;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->whatsapp = $request->whatsapp;
        $customer->web = $request->web;
        $customer->facebook = $request->facebook;
        if(isset( $request->image))
        {
            $image_name = rand() . time() . '.' . $request->image->getClientOriginalExtension();
        $customer->image = $image_name;
        $request->image->move('upload/customers', $image_name);

        }
        $customer->save();
        return redirect('/customer/all');
    }
    public function delete($id)
    {
        $customer=Customer::find($id);
        $customer->delete();
        return redirect('/customer/all');

    }
    public function profile($id)
    {
         $customer=Customer::find($id);
        return view('customer.profile' , compact('customer'));

    }
    public function search()
    {
        $search_text=$_GET['query'];
        $customers=Customer::where('first_name','LIKE','%'.$search_text.'%')->get();
        return view('customer.search' , compact('customers'));
    }
}
