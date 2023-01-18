<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestOwner extends Model
{
    use HasFactory;
    
    public function test()
    {
        return $this->belongsTo(Test::class);
    }
    
    public function test_program()
    {
        return $this->hasMany(TestProgram::class);
    }
}
