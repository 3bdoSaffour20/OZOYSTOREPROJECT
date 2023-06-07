<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\CartItem;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::All();
        return view('dashboard.Categories.category', compact('categories'));
    }

    public function add(){
        return view('dashboard.Categories.category-add');
    }
    public function store(Request $request){
     $request->validate([
        'name' => 'required',
        'img' => 'required',
     ]);
     $category = new Category;
     $category->name = $request['name'];
     $category->img = $request['img'];
     $category->save();

     return redirect('/dashboard/category');
    }
    
    public function edit($id, Request $request) {
        $category = Category::find($id);
        return view('dashboard.Categories.category-edit', compact('category'));
    }
    public function update($id, Request $request) {
         $request->validate([
            'name' => 'required',
            'img' => 'required',
         ]);
         $category = Category::find($id);
         $category->name = $request['name'];
         $category->img = $request['img'];
         $category->save();

         return redirect('/dashboard/category');
    }

    public function delete($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect('/dashboard/category');
   }

   public function explore() {
    $categories = Category::all();
    $carts = CartItem::where('user_id', Auth::user()->id)->get();
    return view('frontend.categories', compact('categories', 'carts'));
}

   public function search($id)  {
    $categories = Category::find($id);
    $carts = CartItem::where('user_id', Auth::user()->id)->get();
    return view('search-categories', compact('categories', 'carts'));
   }

   public function viewcategory($name) {
    if(Category::where('name', $name)->exists())
     {
    $category  =  Category::where('name', $name)->first();
    $products = Product::where('category_id', $category->id)->wherenot('quantity', 0)->get();
    $carts = CartItem::where('user_id', Auth::user()->id)->get();
    return view('frontend.Products.index', compact('category', 'products', 'carts'));
    }
    else{
        return redirect('/home')->with('status', 'name does not exist');
    }
   }
}