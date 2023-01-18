<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalExperience extends Model
{
    use HasFactory;
    
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
