<?php

namespace App\Models\SuperAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\House;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function universities()
    {
        return $this->belongsToMany(University::class, 'university_location');
    }

    public function houses()
    {
        return $this->belongsToMany(House::class, 'location_house');
    }
}
