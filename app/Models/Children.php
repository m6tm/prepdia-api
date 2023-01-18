<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;
    
    public function hourly()
    {
        return $this->hasOne(Hourly::class);
    }
    
    public function tutor_option()
    {
        return $this->hasMany(TutorOption::class);
    }
    
    public function offer()
    {
        return $this->belongsTo(OfferOwner::class);
    }
    
    public function help_subject()
    {
        return $this->hasMany(HelpSubjectOwner::class);
    }
    
    public function program()
    {
        return $this->hasOne(ProgramOwner::class);
    }
}
