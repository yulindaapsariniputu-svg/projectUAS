<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sayaController extends Controller
{
    public function index()
    {
       return view('aboutView');
    }
}