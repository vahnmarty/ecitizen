<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\EmergencyReport;

class MyReports extends Component
{
    public function render()
    {
        $reports = EmergencyReport::where('user_id', auth()->id())->get();
        return view('livewire.user.my-reports', compact('reports'));
    }
}
