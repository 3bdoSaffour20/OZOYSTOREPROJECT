<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
            'add_date' => 'required',
        ]);

        $product = new Product;
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->category_id = $request['category_id'];
        $product->img = $request['img'];
        $product->add_date = $request['add_date'];
        $product->save();

        return redirect('/product');
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
            'add_date' => 'required',
        ]);

        $product = Product::find($id);
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->category_id = $request['category_id'];
        $product->img = $request['img'];
        $product->add_date = $request['add_date'];
        $product->save();

        return redirect('/product');
    }

    public function delete($id) {
         $Product = Category::find($id);
         $Product->delete();
    }
}
