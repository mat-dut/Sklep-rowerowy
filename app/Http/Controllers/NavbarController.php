<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function about(){
        return view('navbar.about');
    }
    public function contact(){
        return view('navbar.contact');
    }
}
