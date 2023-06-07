<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class ShowCartController extends Controller
{

   public function decrementQuantity(int $cartid)
   { 
   $cartData  = CartItem::where('id', $cartid)->where('user_id', auth()->user()->id)->first();
   if($cartData)
   {
    $cartData->decrement('Quantity');
    $this->dispatchBrowserEvent('massage', [
        'text' => 'Quantity Updated',
        'type' => 'success',
        'status' => 200
    ]);
   }else{
     $this->dispatchBrowserEvent('massage', [
        'text' => 'Something went Wrong!',
        'type' => 'error',
        'status' => 404
     ]);
   }
   }

   public function incrementQuantity(int $cartid)
   {
    $cartData  = CartItem::where('id', $cartid)->where('user_id', auth()->user()->id)->get()->first();
    if($cartData)
    {
        if( $cartData->product()->where('id', $cartData->product_id)->exists()){

            $product = $cartData->product()->where('id', $cartData->product_id)->first();
            if($product->quantity > $cartData->quantity){

                $cartData->increment('Quantity');
                return redirect('/showcart')->with('massage', 'hello');
                // $this->dispatchBrowserEvent('massage', [
                //     'text' => 'Quantity Updated',
                //     'type' => 'success',
                //     'status' => 200
                //     ]);
            }
        }
        else{
            return redirect('/showcart')->with('massage', 'hello');
            // $this->dispatchBrowserEvent('massage', [
            //     'text' => "Only ". $product->quantity ." Quantity Available",
            //     'type' => 'success',
            //     'status' => 200
            //     ]);  
        }
    }
    else{  

                if($cartData->product->quantity > $cartData->quantity){
                 return redirect('/showcart')->with('massage', 'hello');
                // $this->dispatchBrowserEvent('massage', [
                //     'text' => 'Something went Wrong!',
                //     'type' => 'error',
                //     'status' => 404
                //  ]);
                }
                // else{
                //     $this->dispatchBrowserEvent('massage', [
                //         'text' => "Only " . $cartData->product->quantity . " Quantity Available",
                //         'type' => 'success',
                //         'status' => 200
                //         ]);  
                // }
            } 
   }
   
   public function render(){
    $carts = CartItem::where('user_id', Auth::user()->id)->get();
    return view('frontend.CartItem.index', compact('carts'));
   }
}