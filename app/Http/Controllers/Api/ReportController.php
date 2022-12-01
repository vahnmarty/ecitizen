<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function emergency(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'sender' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'geolocation' => 'nullable',
            'message' => 'nullable',
        ]);

        return $request->all();
    }
}
