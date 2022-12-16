<?php

namespace App\Http\Controllers;

use App\Models\Hotline;
use App\Models\Directory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('frontend.about');
    }

    public function hotlines()
    {
        $hotlines = Hotline::with('numbers')->get();
        return view('frontend.hotlines', compact('hotlines'));
    }

    public function directory()
    {
        $directories = Directory::get();
        return view('frontend.directory', compact('directories'));
    }
}
