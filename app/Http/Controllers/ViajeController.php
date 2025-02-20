<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViajeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function eurotrip()
    {
        return view('viajes.eurotrip');
    }

    public function greciaCroacia()
    {
        return view('viajes.grecia-croacia');
    }
}
