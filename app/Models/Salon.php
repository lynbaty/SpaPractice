<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function technicals()
    {
        return $this->belongsToMany(User::class, 'salon_technical', 'salon_id', 'technical_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
