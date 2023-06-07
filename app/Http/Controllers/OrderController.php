<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        return view('dashboard.Orders.order', compact('orders'));
    }

    // public function add() {
    //     $products = Product::all();
    //     return view('dashboard.Orders.order-add', compact('products'));
    // }

    // public function store(Request $request) {
    //     $request->validate([
    //         'product_id' => 'required',
    //         'price' => 'required',
    //         'quantity' => 'required',
    //         'ordered' => 'required',
    //         'shipped' => 'required',
    //     ]);

    //     $order = new Order();
    //     $order->product_id = $request['product_id'];
    //     $order->price = $request['price'];
    //     $order->quantity = $request['quantity'];
    //     $order->ordered = $request['ordered'];
    //     $order->shipped = $request['shipped'];
    //     $order->save();

    //     return redirect('/order');
    // }

    // public function edit($id) {
    //     $order = Order::find($id);
    //     $products = Product::all();
    //     return view('dashboard.Orders.order-edit', compact('order', 'products'));
    // }

    // public function update($id, Request $request) {
    //     $request->validate([
    //         'product_id' => 'required',
    //         'price' => 'required',
    //         'quantity' => 'required',
    //         'ordered' => 'required',
    //         'shipped' => 'required',
    //     ]);

    //     $order = Order::find($id);
    //     $order->product_id = $request['product_id'];
    //     $order->price = $request['price'];
    //     $order->quantity = $request['quantity'];
    //     $order->ordered = $request['ordered'];
    //     $order->shipped = $request['shipped'];
    //     $order->save();
    //     return redirect('/order');
    // }

    // public function delete($id) {
    //      $order = Order::find($id);
    //      $order->delete();
    //      return redirect('/order');
    // }


    
    public function show() {
        $bills = Bill::all();
        if($bills){
            return view('dashboard.Orders.view', compact('bills'));
        }
    }
    public function details($id){
        $orders = Order::where('order_id', $id)->get();
        return view('dashboard.Orders.details', compact('orders'));
    }

    public function accept($id) {
        $bill = Bill::find($id);
        $bill->status_id = 2;
        $bill->save();
        
        return redirect('/dashboard/order-view');
    }

    public function deliver($id) {
        $bill = Bill::find($id);
        $bill->status_id = 3;
        $bill->save();
        
        return redirect('/dashboard/order-view');
    }

    public function decline($id) {
        $bill = Bill::find($id);
        $bill->status_id = 4;
        $bill->save();
        
        return redirect('/dashboard/order-view');
    }
    public function viewProfile($id) {
        $userid = Bill::where('id', $id)->get()->first();
        $bills = Bill::where('user_id', $userid->user_id)->get();
            return view('/dashboard.Orders.view-profile', compact('bills'));
    }
    
}
