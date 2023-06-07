<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\Order;
use App\Models\Bill;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{

    public function add($id)
    {
        $product = Product::findOrFail($id);
        if(!Auth::user()) {
            return redirect('/login');
        }

        $cart = CartItem::where('user_id', Auth::id())->where('product_id', $id)->first();
        if ($cart) return redirect('/showcart')->with('failed', 'hrgf ,[;');
        $cart = new CartItem;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $id;
        $cart->quantity = 1;
        $cart->save();

        $cart = CartItem::where('user_id', Auth::user()->id)->get();

        // $cart = session()->get('cart', []);
 
        // if(isset($cart[$id])) {
        //     $cart[$id]['quantity']++;
        // }  else {
        //     $cart[$id] = [
        //         "name" => $product->name,
        //         "img" => $product->img,
        //         "price" => $product->price,
        //         "quantity" => 1
        //     ];
        // }
 
        // session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }



    public function update(Request $request, $id)
    {
        $cartItem = CartItem::find($request->id);
        if($cartItem) {
            $productQuantity = Product::find($cartItem->product_id);
            if($productQuantity->quantity < $request->quantity) {
                session()->flash('failed', 'الكمية التي طلبتها غير متوفرة');
            }

            else {
                $cartItem->quantity = $request->quantity;
                $cartItem->save();
                session()->flash('success', 'Cart successfully updated!');
            }
        }
    }
 
    public function remove($id)
    {
        $cartItem = CartItem::find($id);
        $cartItem->delete();
        // if($request->id) {
        //     $cart = session()->get('cart');
        //     if(isset($cart[$request->id])) {
        //         unset($cart[$request->id]);
        //         session()->put('cart', $cart);
        //     }
       
        return redirect('/showcart')->with('success', 'Product successfully removed!');
        
    }
    
    // public function add(Request $request , $id) {
    //     $product = Product::find($id);
    //     // if(!Auth::id()) {
    //     //    $user = auth()->user();
    //     //          return redirect()->back();
    //     // }
    //     // else{
    //     //     return redirect('login');
    //     // }
    // if($product)
    // {
    //     //$item = CartItem::where('user_id', Auth::id())->where('product_id', $id)->first();
    //     $cartItem = new CartItem;
    //     $cartItem->user_id = Auth::user()->id;
    //     $cartItem->product_id = $id;
    //     $cartItem->quantity = 1;
    //     $cartItem->save();
    // }
    //     return redirect('/view-category/{name}');
    // }

    public function checkout() {
        $cartItems = CartItem::where('user_id', Auth::user()->id)->get();

        $totalOrder = 0;
        if(sizeof($cartItems) > 0) {
            foreach($cartItems as $cartItem) {
                $productAvailability = Product::find($cartItem->product_id);
                if($productAvailability->quantity < $cartItem->quantity) {
                    $updateQuantity = CartItem::where('product_id', $cartItem->product_id)->where('user_id', Auth::user()->id)->get()->first();
                    $updateQuantity->quantity = $productAvailability->quantity;
                    $updateQuantity->save();
                    return redirect('/showcart')->with('failed', 'أحد المنتجات التي إخترتها كميته غير متوفرة، الرجاء الطلب من جديد');
                }
            }

            $orderNum = Order::latest()->first();
            if($orderNum) $orderNum = $orderNum->order_id + 1;
            else $orderNum = 1;

            foreach($cartItems as $cartItem) {
                $newOrder = new Order;
                $newOrder->order_id = $orderNum;
                $newOrder->product_id = $cartItem->product_id;
                $newOrder->price = $cartItem->product->price;
                $newOrder->quantity = $cartItem->quantity;
                $newOrder->save();
                $totalOrder += $cartItem->quantity * $cartItem->product->price;

                $product = Product::find($cartItem->product_id);
                $product->quantity = $product->quantity - $cartItem->quantity;
                $product->save();
            }
            
            $newBill = new Bill;
            $newBill->order_id = $orderNum;
            $newBill->user_id = Auth::user()->id;
            $newBill->ordered = Date('Y-m-d');
            $newBill->shipped = Date('Y-m-d');
            $newBill->total = $totalOrder;
            $newBill->status_id = 1;
            $newBill->save();

            $cartItems = CartItem::where('user_id', Auth::user()->id)->delete();
            return redirect('/showcart')->with('success', 'تم وضع الطلبية بنجاح!');
        }
        return redirect('/showcart')->with('failed', 'العربة فارغة!');
    }
    
}
