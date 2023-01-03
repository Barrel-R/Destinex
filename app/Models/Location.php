<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'details',
        'coordinates',
        'geocoding_info',
        'place_details',
        'directions',
    ];

    public function item() {

        return $this->belongsTo(BookableItem::class);
    }
}
