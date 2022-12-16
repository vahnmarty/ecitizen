<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\EmergencyReport;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function emergency(Request $request)
    {
        $data = $request->validate([
            'type' => 'required',
            'description' => 'required',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
            'address' => 'nullable',
        ]);

        $user = $request->user();

        $report = new EmergencyReport;
        $report->user_id = $user->id;
        $report->fill($data);
        $report->save();

        return response()->json([
            'success' => true,
            'message' => 'Report created successfully',
            'status' => $report->status,
            'data' => $report
        ]);
    }
}
