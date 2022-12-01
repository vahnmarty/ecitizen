<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function search(Request $request)
    {
        $this->validate($request, [
            'keyword' => 'nullable'
        ]);

        return Service::search($request->keyword)->get();
    }

    public function show(Request $request, $id, $slug = null)
    {
        return Service::with('requirements', 'procedures')->findOrFail($id);
    }
}
