<?php

namespace App\Models\NotAcademic;

use App\Models\RecreationalOwner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recreational extends Model
{
    use HasFactory;
    
    public function recreational()
    {
        return $this->hasMany(RecreationalOwner::class);
    }
}
