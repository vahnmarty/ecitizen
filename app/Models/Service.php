<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function requirements()
    {
        return $this->hasMany(ServiceRequirement::class);
    }

    public function procedures()
    {
        return $this->hasMany(ServiceProcedure::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('name', 'LIKE' , '%' . $keyword . '%')->select('id', 'name')->orderBy('name');
    }
}
