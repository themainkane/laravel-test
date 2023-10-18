<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function movieType()
    {
        return $this->belongsTo(MovieType::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class);

    }

    public function certifications()
    {
        return $this->belongsTo(Certification::class);
    }

    public function language()
    {
        return $this->hasOne(Language::class);
    }

    public function origin_country()
    {
        return $this->belongsToMany(Origin_countries::class);
    }
}