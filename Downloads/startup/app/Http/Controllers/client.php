<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class client extends Controller
{
    public function index()
    {
        return view('client');
    }
}
