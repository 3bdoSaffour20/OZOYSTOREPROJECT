<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertise;
use App\Models\Product;
use App\Models\Subscriber;

class AdvertiseController extends Controller
{
    public function index() {
        $advertises = Advertise::all();
        return view('dashboard.Advertise.advertise', compact('advertises'));
    }

    public function add() {
        $advertises = Advertise::all();
        return view('dashboard.Advertise.advertise-add', compact('advertises'));
    }

    public function store(Request $request) {
        $request->validate([
            'AdTitle' => 'required',
            'AdContent' => 'required',
            'subscriber_id' => 'required',
            'product_id' => 'required',
            'category_id' => 'required',
            'subarchive' => 'required',
        ]);

        $advertise = new Advertise;
        $advertise->AdTitle = $request['AdTitle'];
        $advertise->AdContent = $request['AdContent'];
        $advertise->subscriber_id = $request['subscriber_id'];
        $advertise->product_id = $request['product_id'];
        $advertise->category_id = $request['category_id'];
        $advertise->subarchive = $request['subarchive'];
        $advertise->save();

        return redirect('/advertise');
    }

    public function edit($id) {
        $advertises = Advertise::find($id);
        $products = Product::all();
        $subscribers = Subscriber::all();
        return view('dashboard.Advertise.advertise-edit', compact('advertise', 'products', 'subscribers'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'AdTitle' => 'required',
            'AdContent' => 'required',
            'subscriber_id' => 'required',
            'product_id' => 'required',
            'category_id' => 'required',
            'subarchive' => 'required',
        ]);

        $advertise = Advertise::find($id);
        $advertise->AdTitle = $request['AdTitle'];
        $advertise->AdContent = $request['AdContent'];
        $advertise->subscriber_id = $request['subscriber_id'];
        $advertise->product_id = $request['product_id'];
        $advertise->category_id = $request['category_id'];
        $advertise->subarchive = $request['subarchive'];
        $advertise->save();

        return redirect('/advertise');
    }

    public function delete($id) {
         $advertise = Advertise::find($id);
         $advertise->delete();
    }
}
