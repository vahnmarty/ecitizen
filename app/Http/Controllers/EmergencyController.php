<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    public function dashboard()
    {
        return view('emergency.dashboard');
    }
}
