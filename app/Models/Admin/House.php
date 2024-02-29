<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SuperAdmin\University;
use App\Models\SuperAdmin\Location;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'university',
        'image',
        'address',
        'city',
        'country',
        'prop_location',
        't_of_accommodation',
        'rental_rate',
        'occ_date',
        'no_of_washrooms',
        'l_occupied',
        'distance',
        'w_time',
        'c_time',
        'd_time',
        'description',
        'utilities',
        'amenities',
        'status',
    ];

    public function universities()
    {
        return $this->belongsTo(University::class, 'university_house');
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'location_house');
    }
}
