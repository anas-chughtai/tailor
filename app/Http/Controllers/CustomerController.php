<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer/index')->with('customers', $customers);
    }

    public function create()
    {
        $customers = Customer::all();
        return view('customer.create')->with('customers', $customers);
    }

    public function store(Request $request)
    {
        $customer = new Customer($request->all());

        if ($customer->save()) {
            Session::flash('notice', 'Customer was successfully created');
            return redirect('customers');
        } else {
            Session::flash('alert', 'Customer was not successfully created');
            return redirect('customers/create');
        }
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        $customer_order = Order::all()->where('order_delete', '0')->where('customer_id', $id);

        $customer_order_amount = Order::all()->where('order_delete', '0')->where('customer_id', $id)->sum('order_amount');
        $customer_order_paid = Order::all()->where('order_delete', '0')->where('customer_id', $id)->sum('order_paid');
        return view('customer.show')->with('customer', $customer)->with('customer_order', $customer_order)->with('customer_order_amount', $customer_order_amount)->with('customer_order_paid', $customer_order_paid);
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer/edit')->with('customer', $customer);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());

        if ($customer->save()) {
            Session::flash('notice', 'Customer was successfully updated');
            return redirect('customers');
        } else {
            Session::flash('alert', 'Customer was not successfully updated');
            return redirect('customers/edit');
        }
    }

    public function destroy($id)
    {
        //
    }
}
