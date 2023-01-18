<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    
    public function tutor_programs()
    {
        return $this->hasMany(TutorProgramOwner::class);
    }
    
    public function exams()
    {
        return $this->hasMany(ExamPreparation::class);
    }
}
