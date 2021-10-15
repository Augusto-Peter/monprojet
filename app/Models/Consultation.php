<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'methode_therapeutique', 'description', 'therapeute'];
    protected $hidden = ['created_at', 'updated_at'];
    public function personne()
    {
    return $this->belongsTo(Personne::class);
    }
    public function therapy()
    {
    return $this->belongsTo(Therapy::class);
    }
}
