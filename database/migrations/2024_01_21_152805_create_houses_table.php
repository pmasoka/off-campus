<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('university');
            $table->string('image');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('prop_location');
            $table->string('t_of_accommodation');
            $table->decimal('rental_rate', 10);
            $table->date('occ_date')->comment('Contact for more information');
            $table->integer('no_of_washrooms');
            $table->integer('student_number');
            //Landlord
            $table->string('l_occupied')->comment('Yes');
            // Distance to campus
            $table->string('distance', 20);
            $table->decimal('w_time', 10);
            $table->decimal('c_time', 10);
            $table->decimal('d_time', 10);
            //Description
            $table->string('description');
            //Incuded Utilities
            $table->string('utilities')->default(null);
            //Amenities
            $table->string('amenities')->default(null);
            //Status
            $table->string('status')->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
