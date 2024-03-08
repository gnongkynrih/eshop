<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function index(){
        $colors = Color::all();
        return view('color.index',compact('colors'));
    }
    public function add(){
        return view('color.create');
    }

    public function insert(Request $request){

        //validate
        $validated = $request->validate([
            'name'=>'required|unique:colors|max:10|min:3'
        ]);

        //save the data
        $data = new Color();
        $data->name = $request->name;
        $data->save();

        //redirect to the index page
        return redirect()->route('color.index');
    }
}
