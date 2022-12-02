<?php

namespace App\Http\Controllers\Api;

use App\Models\Barangay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangayController extends Controller
{
    public function index()
    {
        return Barangay::orderBy('name')->get();
    }

    public function show($id)
    {
        return Barangay::with('puroks')->findOrFail($id);
    }
}
