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
            $table->string('cover_image');
            $table->string('industry');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('primary_address');
            $table->string('secondary_address');
            $table->string('telephone_primary');
            $table->string('telephone_secondary');
            $table->string('website');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('whatsapp');
            $table->string('linkedin');
            $table->longtext('description');
            $table->string('no_of_employees');
            $table->string('status');
            $table->boolean('is_verified');

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
