<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
    
    public function academic()
    {
        return $this->hasOne(Academic::class);
    }
    
    public function not_academic()
    {
        return $this->hasOne(NotAcademic::class);
    }
}
