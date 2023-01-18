<?php

namespace App\Models;

use App\Models\NotAcademic\Recreational;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecreationalOwner extends Model
{
    use HasFactory;
    
    public function not_academic()
    {
        return $this->belongsTo(NotAcademic::class);
    }
    
    public function recreational()
    {
        return $this->belongsTo(Recreational::class);
    }
}
