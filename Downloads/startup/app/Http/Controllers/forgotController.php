<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgotController extends Controller
{
    public function index()
    {
        return view('forgot');
    }
}
