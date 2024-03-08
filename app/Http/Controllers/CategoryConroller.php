<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryConroller extends Controller
{
    public function create(){
        return view('category.create');
    }
    public function index(){
        //select all the categories from the table
        $categories = Category::all(); //select * from categories
        //to pass values to the view we can use  compact
        return view('category.index',compact('categories'));
    }

    public function store(Request $request){
        //check for validation
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:20|min:4',
        ]);
        //if validation fail then it will not continue
        
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        //redirect to the index page of category
        return redirect()->route('category.index');
    }
}
