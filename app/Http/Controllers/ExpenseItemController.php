<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ExpenseItem;
use Illuminate\Http\Request;

class ExpenseItemController extends Controller
{
    public function AllItems() {
        $items = ExpenseItem::latest()->get();  
        return view('admin.backend.item.all_item',['items'=>$items]);
    }

    public function AddItem() {
       $category = Category::latest()->get();
       return view('admin.backend.item.add_item',['category'=>$category]);
    }

    public function StoreItem(Request $request) { 

        $request->validate([
            'item_name' => 'required|regex:/^[A-Z a-z]+$/i|unique:categories,category_name',
            'validation' => 'required',
            'category_id' => 'required'
        ]);

        ExpenseItem::insert([
            'item_name'=>$request->item_name,
            'category_id'=>$request->category_id,
            'validation'=>$request->validation,
        ]);

        $notification = ['message'=>'Item created successfully','alert-type'=>'success'];
        return redirect()->route('items.all')->with($notification); 
     }
}
