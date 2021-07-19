<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('app.index');
    }

    public function create(){
        return view('app.create');
    }
}
