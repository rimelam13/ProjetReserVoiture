<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }

    public function transmission() {
        return $this->hasOne(Transmission::class);
    }

    public function carburant() {
        return $this->hasOne(Carburant::class);
    }
}
