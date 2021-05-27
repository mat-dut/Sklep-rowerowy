<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Element;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
}
