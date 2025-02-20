<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Esta será la vista principal
    }
}
public function contacto()
{
    return view('contacto');
}