<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestProgram extends Model
{
    use HasFactory;
    
    public function test_owners()
    {
        return $this->belongsTo(TestOwner::class);
    }
    
    public function test_program_owners()
    {
        return $this->belongsTo(TestProgramOwner::class);
    }
}
