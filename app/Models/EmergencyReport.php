<?php

namespace App\Models;

use App\Enums\EmergencyType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmergencyReport extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => EmergencyType::class
    ];

    protected $guarded = [];
}
