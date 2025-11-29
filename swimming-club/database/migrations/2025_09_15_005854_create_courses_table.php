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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');             // Nama kursus
            $table->string('location');         // Lokasi kolam/venue
            $table->string('schedule');         // Jadwal kursus
            $table->decimal('price', 10, 2);    // Harga kursus
            $table->text('description')->nullable(); // Info tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
