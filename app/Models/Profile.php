<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
    
    public function networks()
    {
        return $this->hasMany(Network::class);
    }
    
    public function responding_witnesses()
    {
        return $this->hasMany(RespondingWitness::class);
    }
}
