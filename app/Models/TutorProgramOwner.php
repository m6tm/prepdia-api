<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorProgramOwner extends Model
{
    use HasFactory;
    
    public function academic()
    {
        return $this->belongsTo(Academic::class);
    }
    
    public function class_room()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    
    public function edication_level()
    {
        return $this->belongsTo(EducationLevel::class);
    }
    
    public function edication_system()
    {
        return $this->belongsTo(EducationSystem::class);
    }
}
