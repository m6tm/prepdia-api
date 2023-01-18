<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function payments()
    {
        return $this->hasOne(PaymentMethod::class);
    }

    public function responding_witness()
    {
        return $this->hasOne(RespondingWitness::class);
    }
}
