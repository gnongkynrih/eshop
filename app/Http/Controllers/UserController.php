<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register');
    }
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        //create new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        //assign the role of buyer to the customer
        $user->assignRole('customer');
        
        
        return redirect()->route('user.login');
    }
    public function login()
    {
        return view('user.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            
            // //select * from users where id = Auth::user()->id
            $user = User::find(Auth::user()->id);
            if($user->hasRole('seller')){
                return redirect()->route('seller.profile');
            }else if($user->hasRole('buyer')){
                return redirect()->route('buyer.profile');
            }
            // //assign role
            // $user->assignRole('customer');
            //get the role of the user

        }
        return redirect()->back()->with('failure', 'Invalid credentials');
        dd(Auth::user());
        // return redirect()->route('profile.index');
    }
}
