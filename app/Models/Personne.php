<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    public function consultation()
    {
    return $this->HasMany(Consultation::class);
    }

    public function projet()
    {
    return $this->HasMany(Projet::class);
    }
}
