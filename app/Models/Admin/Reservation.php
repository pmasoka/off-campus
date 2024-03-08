<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'res_date' => 'datetime',
    ];

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
