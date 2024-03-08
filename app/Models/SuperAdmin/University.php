<?php

namespace App\Models\SuperAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\House;

class University extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description'];

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'university_location');
    }
    
    public function houses()
    {
        return $this->belongsToMany(House::class, 'university_house');
    }
}
