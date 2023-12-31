<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin_countries extends Model
{
    use HasFactory;

    public function origin_country()
    {
        return $this->belongsToMany(Movie::class);
    }
}