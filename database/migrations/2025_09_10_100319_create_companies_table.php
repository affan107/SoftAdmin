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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('logo');
            $table->string('cover_image')->nullable();
            $table->string('industry');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('primary_address');
            $table->string('secondary_address')->nullable();
            $table->string('telephone_primary');
            $table->string('telephone_secondary')->nullable();
            $table->string('website');
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('whatsapp');
            $table->string('linkedin');
            $table->longtext('description')->nullable();
            $table->string('no_of_employees');
            $table->string('status');
            $table->boolean('is_verified')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
