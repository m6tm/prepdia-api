<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    
    public function children_programs()
    {
        return $this->hasMany(ProgramOwner::class);
    }
    
    public function test_programs()
    {
        return $this->hasMany(TestProgramOwner::class);
    }
    
    public function tutor_academic_program()
    {
        return $this->hasMany(TutorProgramOwner::class);
    }
}
