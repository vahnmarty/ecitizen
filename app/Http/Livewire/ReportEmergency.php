<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmergencyReport;
use App\Services\GoogleMapsService;

class ReportEmergency extends Component
{
    //use LivewireAlert;

    public $type, $description, $is_done;
    public $address, $latitude, $longitude;

    protected $rules = [
        'type' => 'required',
        'description' => 'required',
        'address' => 'nullable',
        'latitude' => 'nullable',
        'longitude' => 'nullable',
    ];
    
    public function render()
    {
        return view('livewire.report-emergency')->layout('layouts.guest');
    }

    public function submit()
    {
        $data = $this->validate();

        $report = new EmergencyReport;
        $report->user_id = auth()->id();
        $report->useragent = null;
        $report->fill($data);
        $report->save();

        $this->is_done = true;
    }

    public function setGeolocation($lat, $long)
    {
        $this->latitude = $lat;
        $this->longitude = $long;

        $this->address = $this->reverseGeocoding();
    }

    public function reverseGeocoding()
    {
        $google = new GoogleMapsService();
        return $google->reverseGeocoding($this->latitude, $this->longitude);
    }
}
