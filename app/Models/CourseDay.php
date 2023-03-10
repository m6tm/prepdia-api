<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDay extends Model
{
    use HasFactory;
    
    public function hourly()
    {
        return $this->belongsTo(Hourly::class);
    }
}
