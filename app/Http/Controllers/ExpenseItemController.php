<?php

namespace App\Http\Controllers;

use App\Models\ExpenseItem;
use Illuminate\Http\Request;

class ExpenseItemController extends Controller
{
    public function AllItems() {
        $items = ExpenseItem::latest()->get();
        return view('admin.backend.item.all_item',['items'=>$items]);
    }

    public function AddItem() {
       return view('admin.backend.item.add_item');
    }

    public function StoreCategory(Request $request) { 

        $request->validate([
            'item_name' => 'required|regex:/^[A-Z a-z]+$/i|unique:categories,category_name' 
        ]);

        ExpenseItem::insert([
            'item_name'=>$request->item_name
        ]);

        $notification = ['message'=>'Category created successfully','alert-type'=>'success'];
        return redirect()->route('category.all')->with($notification); 
     }
}
