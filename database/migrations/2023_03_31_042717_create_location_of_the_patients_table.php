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
        Schema::create('location_of_the_patients', function (Blueprint $table) {
            $table->foreignId('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->string("gps_coordinates");
            $table->string("address");
            $table->string("LandmarkOfALocation")->nullable();
            $table->integer("priority")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_of_the_patients');
    }
};
