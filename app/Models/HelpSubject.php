<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpSubject extends Model
{
    use HasFactory;
    
    public function subject_help()
    {
        return $this->hasMany(HelpSubjectOwner::class);
    }
}
