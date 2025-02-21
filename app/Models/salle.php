<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'prix', 'status', 'nbr_places'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
