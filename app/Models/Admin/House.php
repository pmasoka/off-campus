<?php

namespace App\Models\Admin;

use App\Models\SuperAdmin\Location;
use App\Models\SuperAdmin\University;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'university_id',
        'image',
        'address',
        'city',
        'country',
        'location_id',
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
        'student_number',
    ];

    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
