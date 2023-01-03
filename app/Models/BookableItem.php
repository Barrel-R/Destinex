<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookableItem extends Model
{
    use HasFactory;

    public function category() {

        return $this->belongsTo(Category::class, 'item_id');
    }

    public function location() {

        return $this->hasOne(Location::class);
    }
}
