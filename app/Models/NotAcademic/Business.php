<?php

namespace App\Models\NotAcademic;

use App\Models\NotAccademicProgamOwner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    
    public function programs()
    {
        return $this->hasMany(NotAccademicProgamOwner::class);
    }
}
