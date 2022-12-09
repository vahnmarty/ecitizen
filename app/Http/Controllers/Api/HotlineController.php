<?php

namespace App\Http\Controllers\Api;

use App\Models\Hotline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotlineController extends Controller
{
    public function index()
    {
        return Hotline::with('numbers')->get();
    }
}
