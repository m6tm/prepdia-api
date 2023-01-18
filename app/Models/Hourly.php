<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hourly extends Model
{
    use HasFactory;
    
    public function children()
    {
        return $this->belongsTo(Children::class);
    }
    
    public function course_days()
    {
        return $this->hasMany(CourseDay::class);
    }
}
