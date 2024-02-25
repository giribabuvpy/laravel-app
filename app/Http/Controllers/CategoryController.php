<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory() {
        $category = Category::latest()->get();
        return view('admin.backend.category.all_category',['categories'=>$category]);
    }

    public function AddCategory() {
       return view('admin.backend.category.add_category');
    }

    public function StoreCategory(Request $request) { 

        $request->validate([
            'category_name' => 'required|regex:/^[A-Z a-z]+$/i|unique:categories,category_name'
        ]);

        Category::insert([
            'category_name'=>$request->category_name
        ]);

        $notification = ['message'=>'Category created successfully','alert-type'=>'success'];
        return redirect()->route('category.all')->with($notification); 
     }
}