<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availablity extends Model
{
    use HasFactory;
    
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
    
    public function availablity_items()
    {
        return $this->hasMany(AvailablityItem::class);
    }
}
