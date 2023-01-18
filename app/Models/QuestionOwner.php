<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOwner extends Model
{
    use HasFactory;
    
    public function test_program()
    {
        return $this->belongsTo(TestProgramOwner::class);
    }
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
