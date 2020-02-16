<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes; // mengaktifkan soft deletes

    // menyimpan secara langsung
    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event', 'language', 
        'foods', 'departure_date', 'duration', 'type', 'price'
    ];

    protected $hidden = [

    ];
}
