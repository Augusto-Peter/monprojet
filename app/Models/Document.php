<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'type', 'taille', 'description', 'auteur', 'pv', 'chemin'];
    protected $hidden = ['created_at', 'updated_at'];
    public function consultation()
    {
    return $this->belongsTo(Consultation::class);
    }
}
