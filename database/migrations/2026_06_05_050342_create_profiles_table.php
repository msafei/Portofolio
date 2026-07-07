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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('MUHAMAD SAFEI');
            $table->string('title')->default('SOFTWARE ENGINEER');
            $table->string('subtitle')->default('KNOW MORE ABOUT ME');
            $table->text('bio');
            $table->integer('start_year')->default(2020);
            $table->string('resume_link')->nullable();
            $table->string('email')->nullable();
            $table->string('media_path')->nullable(); // For video or photo
            $table->string('media_type')->default('video'); // video / photo
            $table->string('media_title')->default('The Visionary');
            $table->string('media_subtitle')->default('Self Portrait, 2026');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
