<?php

namespace App\Models;

use App\Models\NotAcademic\Business;
use App\Models\NotAcademic\Informatic;
use App\Models\NotAcademic\Music;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotAccademicProgamOwner extends Model
{
    use HasFactory;
    
    public function informatic()
    {
        return $this->belongsTo(Informatic::class);
    }
    
    public function music()
    {
        return $this->belongsTo(Music::class);
    }
    
    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
