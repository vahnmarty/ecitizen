<?php

namespace App\Http\Controllers;

use App\Models\Hotline;
use App\Models\Directory;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $announcements = Announcement::latest()->get()->take(3);
        return view('welcome', compact('announcements'));
    }

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
