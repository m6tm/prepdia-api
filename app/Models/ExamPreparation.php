<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPreparation extends Model
{
    use HasFactory;
    
    public function academic()
    {
        return $this->belongsTo(Academic::class);
    }
    
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
