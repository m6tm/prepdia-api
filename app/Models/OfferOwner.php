<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferOwner extends Model
{
    use HasFactory;
    
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
    
    public function parent()
    {
        return $this->belongsTo(Client::class);
    }
    
    public function collaborator()
    {
        return $this->belongsTo(Collaborator::class);
    }
    
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
    
    public function childrens()
    {
        return $this->hasMany(Children::class);
    }
    
    public function offer_proposals()
    {
        return $this->hasMany(OfferProposal::class);
    }
}
