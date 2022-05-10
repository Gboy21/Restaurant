<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController1 extends Controller
{
    //
    public function index() {
        return view('create');
    }
    public function store(Request $request) {
        return $request->all();
    }
}
