<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::all(); //select * from profile
        return view('profile.index', compact('profiles'));
    }

    public function create(){
        return view('profile.create');
    }

    public function saveProfile(Request $request){

        try{
            //validate if the form is filled as per rule. if not, it will throw an exception
            $request->validate([
                'name' => 'required|min:3',
                'dob' => 'required'
            ],[
                'name.required' => 'Name is required',
                'name.min' => 'Name should be at least 3 characters',
                'dob.required' => 'Date of Birth is required'
            ]);

            $profile = new Profile();
            if($request->hasFile('picture')){ //checks if the user uploaded the file
                $file = $request->file('picture');  //if yes, get the file
                $extension = $file->getClientOriginalExtension(); //get the extension of the file
                $filename = time().'.'.$extension; //assign a unique name to the file
                $file->storeAs('public/images', $filename); //save the file in public/images folder
                $profile->picture = $filename; //store in the database the file name
            }
            
            $profile->name = $request->name;
            $profile->dob = $request->dob;
            $profile->save();
            return redirect()->route('profile.create')->with('success', 'Profile created successfully');
        }catch(Exception $e){
            return redirect()->route('profile.create')->with('failure', 'Profile creation failed');
        }
    }
}
