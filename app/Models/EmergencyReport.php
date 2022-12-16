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

    protected $appends = ['status'];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusAttribute()
    {
        if($this->verified_at){
            return 'VERIFIED';
        }

        return 'PENDING';
    }
}
