<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;



class FrontendController extends Controller
{
    public function index() {
        return view('products');
     }
    public function about() {
        $carts = CartItem::where('user_id', Auth::user()->id)->get();
        return view('frontend.about', compact('carts'));
    }
    public function contact() {
        $carts = CartItem::where('user_id', Auth::user()->id)->get();
        return view('frontend.contact', compact('carts'));
    }
}

