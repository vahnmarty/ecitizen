<?php

namespace App\Models;

use App\Enums\HotlineCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotline extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'hotline_category' => HotlineCategory::class
    ];

    public function numbers()
    {
        return $this->hasMany(HotlineNumber::class);
    }
}
