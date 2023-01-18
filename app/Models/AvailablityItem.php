<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailablityItem extends Model
{
    use HasFactory;
    
    public function availablity()
    {
        return $this->belongsTo(Availablity::class);
    }
}
