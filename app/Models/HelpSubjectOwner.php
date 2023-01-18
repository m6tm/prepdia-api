<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpSubjectOwner extends Model
{
    use HasFactory;
    
    public function children()
    {
        return $this->belongsTo(Children::class);
    }
    
    public function help_subject()
    {
        return $this->belongsTo(HelpSubject::class);
    }
}
