<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestProgramOwner extends Model
{
    use HasFactory;
    
    public function test_programs()
    {
        return $this->hasMany(TestProgram::class);
    }
    
    public function class_room()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    
    public function education_level()
    {
        return $this->belongsTo(EducationLevel::class);
    }
    
    public function education_system()
    {
        return $this->belongsTo(EducationSystem::class);
    }
    
    public function questions()
    {
        return $this->hasMany(QuestionOwner::class);
    }
}
