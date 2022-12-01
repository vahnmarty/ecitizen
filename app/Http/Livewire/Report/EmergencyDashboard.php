<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;

class EmergencyDashboard extends Component
{
    public $alerts = [];

    public function render()
    {
        return view('livewire.report.emergency-dashboard')->layout('layouts.blank');
    }

    public function mount()
    {
        $this->getFakers();
    }

    public function getFakers()
    {
        $this->alerts[] = [
            'type' => 'Fire',
            'location' => 'Zone Meteor IISHAI Suarez',
            'time' => now()->diffForHumans(),
            'user' => 'Anonymous',
            'description' => 'Naay sunog sa likod sa basketbolan kaning doul sa menteryo'
        ];

        $this->alerts[] = [
            'type' => 'Flood',
            'location' => 'Purok 10 Bagong Silang',
            'time' => now()->diffForHumans(),
            'user' => 'Anonymous',
            'description' => 'Ga-baha dari sa may parkingan doul sa water station'
        ];
    }
}
