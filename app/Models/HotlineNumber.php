<?php

namespace App\Models;

use App\Enums\PhoneType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HotlineNumber extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'phone_type' => PhoneType::class
    ];
}
