<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
     ]);
     $category = new Category;
     $category = $request['name'];
     $category->save();

     return redirect('/category');
    }
    
    public function edit($id, Request $request) {
        $category = Category::find($id);
        return view('dashboard.Categories.category-edit', compact('categories'));
    }
    public function update($id, Request $request) {
         $request->validate([
            'name' => 'required',
         ]);
         $category = Category::find($id);
         $category->name = $request['name'];
         $category->save();

         return redirect('/category');
    }

    public function delete($id) {
        $category = Category::find($id);
        $category->delete();
    }
}
