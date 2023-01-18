<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
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
    
    public function offer_proposals()
    {
        return $this->hasMany(OfferProposal::class);
    }
    
    public function feedbacks()
    {
        return $this->hasMany(FeedBackOwner::class);
    }
    
    public function educations()
    {
        return $this->hasMany(Education::class);
    }
    
    public function experience_pros()
    {
        return $this->hasMany(ProfessionalExperience::class);
    }
    
    public function availablity()
    {
        return $this->hasMany(Availablity::class);
    }
    
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
    public function tests()
    {
        return $this->hasMany(Test::class);
    }
    
    public function subject()
    {
        return $this->hasOne(Subject::class);
    }
}
