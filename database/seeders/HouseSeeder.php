<?php

namespace Database\Seeders;

use App\Models\Admin\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // MSUAS
         House::create([
            'university' => 'MSUAS',
            'location' => 'Fern Valley',
            'image' => '',
            'address' => 'MSUAS Address',
            'city' => 'MSUAS City',
            'country' => 'MSUAS Country',
            'prop_location' => 'MSUAS Property Location',
            't_of_accommodation' => 'Shared Indoor 1 Room',
            'rental_rate' => 50, // Adjust the value as needed
            'occ_date' => '2024-02-06', // Adjust the date as needed
            'no_of_washrooms' => 2,
            'l_occupied' => 'Yes',
            'distance' => '10 km',
            'w_time' => '8 km',
            'c_time' => '6 km',
            'd_time' => '4 km',
            'description' => 'MSUAS Description',
            'utilities' => 'MSUAS Utilities',
            'amenities' => 'MSUAS Amenities',
            'status' => 'Available',
        ]);

        // UZ
        House::create([
            'university' => 'UZ',
            'location' => 'Waterfalls',
            'image' => '',
            'address' => 'UZ Address',
            'city' => 'UZ City',
            'country' => 'UZ Country',
            'prop_location' => 'UZ Property Location',
            't_of_accommodation' => 'Shared Indoor 1 Room',
            'rental_rate' => 50, // Adjust the value as needed
            'occ_date' => '2024-02-07', // Adjust the date as needed
            'no_of_washrooms' => 3,
            'l_occupied' => 'no',
            'distance' => '10 km',
            'w_time' => '8 km',
            'c_time' => '6 km',
            'd_time' => '4 km',
            'description' => 'UZ Description',
            'utilities' => 'UZ Utilities',
            'amenities' => 'UZ Amenities',
            'status' => 'Occupied',
        ]);
    }
}
