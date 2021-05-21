<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;

class ElementController extends Controller
{
    public function index(){

        $elements = Element::select('*')->get();

        return view('index', [
            'elements' => $elements
        ]);
    }
    
}
