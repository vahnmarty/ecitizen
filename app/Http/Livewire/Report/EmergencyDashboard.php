<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;

class EmergencyDashboard extends Component
{
    public function render()
    {
        return view('livewire.report.emergency-dashboard')->layout('layouts.blank');
    }
}
