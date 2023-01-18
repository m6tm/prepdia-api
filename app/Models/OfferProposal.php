<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferProposal extends Model
{
    use HasFactory;
    
    public function offer()
    {
        return $this->belongsTo(OfferOwner::class);
    }
    
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
