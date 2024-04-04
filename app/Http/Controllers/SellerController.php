<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function profile(){
        return view('seller.profile');
    }
}
