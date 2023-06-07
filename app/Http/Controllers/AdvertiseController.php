<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertise;
use App\Models\Category;
use App\Models\Product;

class AdvertiseController extends Controller
{
    public function index() {
        $advertises = Advertise::all();
        return view('dashboard.Advertise.advertise', compact('advertises'));
    }

    public function add() {
        $products = Product::all();
        $categories = Category::all();
        return view('dashboard.Advertise.advertise-add', compact('products','categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'AdTitle' => 'required',
            'AdContent' => 'required',
            'product_id' => 'required',
            'category_id' => 'required',
            'accept' => 'required',
        ]);

        $advertise = new Advertise;
        $advertise->AdTitle = $request['AdTitle'];
        $advertise->AdContent = $request['AdContent'];
        $advertise->product_id = $request['product_id'];
        $advertise->category_id = $request['category_id'];
        $advertise->accept = $request['accept'];
        $advertise->save();

        return redirect('/dashboard/advertise');
    }

    public function edit($id) {
        $advertises = Advertise::find($id);
        $products = Product::all();
        $categories = Category::all();
        return view('dashboard.Advertise.advertise-edit', compact('advertise', 'products', 'categories'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'AdTitle' => 'required',
            'AdContent' => 'required',
            'product_id' => 'required',
            'category_id' => 'required',
            'accept' => 'required',
        ]);

        $advertise = Advertise::find($id);
        $advertise->AdTitle = $request['AdTitle'];
        $advertise->AdContent = $request['AdContent'];
        $advertise->product_id = $request['product_id'];
        $advertise->category_id = $request['category_id'];
        $advertise->accept = $request['accept'];
        $advertise->save();

        return redirect('/dashboard/advertise');
    }

    public function delete($id) {
         $advertise = Advertise::find($id);
         $advertise->delete();
         return redirect('/dashboard/advertise');
    }
}
