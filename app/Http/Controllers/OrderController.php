<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\Staff;
use App\Customer;
use App\Measurement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\User;
use Hash;
use Validator;
use Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all()->where('order_delete', '0');
        return view('order.index')->with('orders', $orders);
    }

    public function create()
    {
        $customer = Customer::all()->pluck('phone', 'id');
        return view('order.create')->with('customer', $customer);
    }

    public function store(Request $request)
    {
        $order = Order::create($request->except('items'));
        $order_id = $order->id;
        if ($request->items) {
            foreach ($request->items as $item) {
                $item_row = array_merge($request->except('items'), $item);
                $data = array_merge($item_row, ['order_id' => $order_id]);
                $order = OrderItem::create([
                    'order_id' => $data['order_id'],
                    'item' => $data['item'],
                    'qty' => $data['qty'],
                    'amount' => $data['amount']
                ]);
            }
            if ($order->save()) {
                Session::flash('notice', 'Order was successfully Created');
                return redirect()->route('orders.index');
            } else {
                Session::flash('alert', 'Order was not successfully Created');
                return redirect('orders.create');
            }
        } else {
            Session::flash('alert', 'Something went wrong');
            return redirect('orders.create');
        }
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('order.show')->with('order', $order);
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('order.edit')->with('order', $order);
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update($request->all());
        if ($order->save()) {
            Session::flash('notice', 'Order was successfully updated');
            return redirect('orders');
        } else {
            Session::flash('alert', 'Order was not successfully updated');
            return redirect('orders.create');
        }
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->order_delete = '1';

        if ($order->save()) {
            return redirect('orders');
        }
    }


    //UPDATE Password
    public function password()
    {
        return View('order/password');
    }

    public function updatePassword(Request $request)
    {
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];

        $messages = [
            'mypassword.required' => 'Current password is required',
            'password.required' => 'New password is required',
            'password.confirmed' => 'Passwords do not match',
            'password.min' => 'Password is too short (minimum is 6 characters)',
            'password.max' => 'Password is too long (maximum is 18 characters)',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('password')->withErrors($validator);
        } else {
            if (Hash::check($request->mypassword, Auth::user()->password)) {
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                    ->update(['password' => bcrypt($request->password)]);
                return redirect('/')->with('notice', 'Password changed successfully')->with('m-class', 'alert-success');
            } else {
                return redirect('password')->with('alert', 'Current password is invalid')->with('m-class', 'alert-danger');
            }
        }
    }
}
