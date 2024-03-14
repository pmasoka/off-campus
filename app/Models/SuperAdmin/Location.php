<?php

namespace App\Models\SuperAdmin;

use App\Models\Admin\House;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $appends = ['university_id'];

    public function universities()
    {
        return $this->belongsToMany(University::class, 'university_location');
    }

    public function universityId(): Attribute
    {
        return Attribute::make(get: fn () => $this->universities->first()->id);
    }

    public function houses()
    {
        return $this->belongsToMany(House::class, 'location_house');
    }
}
