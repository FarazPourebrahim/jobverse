<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        $name = $request->query('name');
        return view('home.index', compact('name'));
    }
}
