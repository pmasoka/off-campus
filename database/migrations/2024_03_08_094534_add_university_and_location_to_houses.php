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
        Schema::table('houses', function (Blueprint $table) {
            $table->dropColumn(['university', 'prop_location']);
            $table->foreignId('university_id')->after('id')->constrained()->onDelete('cascade');
            $table->foreignId('location_id')->after('university_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->string('university');
            $table->string('prop_location');
            $table->dropForeign(['university_id']);
            $table->dropForeign(['location_id']);
            $table->dropColumn(['university_id', 'location_id']);

        });
    }
};
