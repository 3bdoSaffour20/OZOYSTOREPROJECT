<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Bill;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('dashboard.Products.product', compact('products'));
    }

    public function add() {
        $categories = Category::all();
        return view('dashboard.Products.product-add', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'img' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'add_date' => 'required',
        ]);

        $check = Product::where('name', $request['name'])->get()->first();
        if($check) return redirect('/dashboard/product-add')->with('failed', 'المنتج مضاف مسبقاً');
        
       
        $product = new Product;
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->category_id = $request['category_id'];
        $product->img = $request['img'];
        $product->price = $request['price'];
        $product->quantity = $request['quantity'];
        $product->add_date = $request['add_date'];
        $product->save();

        return redirect('/dashboard/product');
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::all();
        return view('dashboard.Products.product-edit', compact('product', 'categories'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'img' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'add_date' => 'required',
        ]);


        $check = Product::where('name', $request['name'])->get()->first();
        if($check) return redirect('/dashboard/product-add')->with('failed', 'المنتج مضاف مسبقاً');

        $product = Product::find($id);
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->category_id = $request['category_id'];
        $product->img = $request['img'];
        $product->price = $request['price'];
        $product->quantity = $request['quantity'];
        $product->add_date = $request['add_date'];
        $product->save();

        return redirect('/dashboard/product');
    }

    public function delete($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect('/dashboard/product');
   }


   public function show() {
    $bills = Bill::where('user_id', Auth::user()->id)->get();
    $carts = CartItem::where('user_id', Auth::user()->id)->get();
    return view('frontend.Products.view', compact('bills', 'carts'));
    //$carts = CartItem::where('user_id', Auth::user()->id)->get();
    //$newOrders = Order::where('order_id', $id)->get();
    //if($newOrders){
      //  return view('frontend.Products.view', compact('newOrders', 'carts'));
    //}
}

    public function myOrder($id) {
        $orders = Order::where('order_id', $id)->get();
        $carts = CartItem::where('user_id', Auth::user()->id)->get();
        return view('frontend.Products.details', compact('orders', 'carts'));
    }

    public function details($name){
        if(Product::where('name', $name)->exists())
     {
    $products  =  Product::where('name', $name)->first();
    $products = Product::where('id', $products->id)->get();
    $carts = CartItem::where('user_id', Auth::user()->id)->get();
    return view('frontend.Products.Product', compact('products','carts'));
    }
}
}