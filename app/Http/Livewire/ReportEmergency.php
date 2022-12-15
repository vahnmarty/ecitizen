<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReportEmergency extends Component
{
    public $type;
    
    public function render()
    {
        return view('livewire.report-emergency')->layout('layouts.guest');
    }
}
