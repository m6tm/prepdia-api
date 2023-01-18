<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    
    public function feedbacks()
    {
        return $this->hasMany(FeedBackOwner::class);
    }
}
