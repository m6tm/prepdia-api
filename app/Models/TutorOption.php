<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorOption extends Model
{
    use HasFactory;
    
    public function children()
    {
        return $this->belongsTo(Children::class);
    }
}
