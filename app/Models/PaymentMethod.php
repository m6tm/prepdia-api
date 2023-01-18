<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
    
    public function payment()
    {
        return $this->hasOne(PaymentOwner::class);
    }
}
