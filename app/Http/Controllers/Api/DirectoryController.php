<?php

namespace App\Http\Controllers\Api;

use App\Models\Directory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DirectoryController extends Controller
{
    public function index(Request $request)
    {
        return Directory::orderBy('name')->get();
    }
}
