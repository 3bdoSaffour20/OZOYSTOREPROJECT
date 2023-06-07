<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Customer;
use app\models\User;
class CustomerController extends Controller
{
    public function index() {
        $users = User::all();
        return view('dashboard.Customers.customer', compact('users'));
    }

    public function add() {
        $users = User::all();
        return view('dashboard.Customers.customer-add', compact('users'));
    }

    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'cusname' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $customer = new Customer;
        $customer->user_id = $request['user_id'];
        $customer->cusname = $request['cusname'];
        $customer->address = $request['address'];
        $customer->phone = $request['phone'];
        $customer->save();

        return redirect('/customer');
}
public function edit($id) {
    $customer = Customer::find($id);
    $users = User::all();
    return view('dashboard.Customers.customer-edit', compact('customer', 'users'));
}
public function update($id, Request $request) {
    $request->validate([
        'user_id' => 'required',
        'cusname' => 'required',
        'address' => 'required',
        'phone' => 'required',
    ]);
    $customer = Customer::find($id);
    $customer->user_id = $request['user_id'];
    $customer->cusname = $request['cusname'];
    $customer->address = $request['address'];
    $customer->phone = $request['phone'];
    $customer->save();

    return redirect('/customer');
}

public function delete($id){
    $customer = Customer::find($id);
    $customer->delete();

    return redirect('/customer');
}
}