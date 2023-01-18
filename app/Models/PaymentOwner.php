<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentOwner extends Model
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

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
