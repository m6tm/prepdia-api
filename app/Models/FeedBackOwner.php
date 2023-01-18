<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBackOwner extends Model
{
    use HasFactory;
    
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
    
    public function parent()
    {
        return $this->belongsTo(Client::class);
    }
    
    public function feedback()
    {
        return $this->belongsTo(FeedBack::class);
    }
    
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
