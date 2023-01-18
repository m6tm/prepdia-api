<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramOwner extends Model
{
    use HasFactory;
    
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
}
