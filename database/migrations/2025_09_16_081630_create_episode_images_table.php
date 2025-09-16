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
        Schema::create('episode_images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('episode_id')->constrained()->onDelete('cascade'); // Foreign key to companies table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episode_images');
    }
};
