<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'arrival_date',
        'departure_date',
    ];

    public function user() {

        return $this->belongsToMany(User::class);
    }
}
