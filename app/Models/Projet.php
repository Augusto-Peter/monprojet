<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'd_d_d', 'd_d_f', 'etape', 'pv', 'chef_projet'];
   
    public function personne()
    {
    return $this->belongsTo(Personne::class);
    }
    public function consultation()
    {
    return $this->hasMany(Consultation::class);
    }
}
