<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotAcademic extends Model
{
    use HasFactory;
    
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    
    public function programs()
    {
        return $this->hasMany(NotAccademicProgamOwner::class);
    }
    
    public function recreationals()
    {
        return $this->hasMany(RecreationalOwner::class);
    }
}
