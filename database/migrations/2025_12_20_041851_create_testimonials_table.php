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
        Schema::create('testimonials', function ($table) {
    $table->id();
    $table->string('name');
    $table->string('country')->nullable();
    $table->unsignedTinyInteger('rating')->default(5); // 1-5
    $table->text('message');
    $table->boolean('is_approved')->default(true); // bisa kamu ubah false kalau mau moderasi
    $table->timestamps();
});
Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
