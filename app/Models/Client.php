<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function payments()
    {
        return $this->hasMany(PaymentOwner::class);
    }

    public function offers()
    {
        return $this->hasMany(OfferOwner::class);
    }

    public function reference()
    {
        return $this->hasOne(Reference::class);
    }
}
