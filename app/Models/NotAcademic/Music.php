<?php

namespace App\Models\NotAcademic;

use App\Models\NotAccademicProgamOwner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    
    public function programs()
    {
        return $this->hasMany(NotAccademicProgamOwner::class);
    }
}
