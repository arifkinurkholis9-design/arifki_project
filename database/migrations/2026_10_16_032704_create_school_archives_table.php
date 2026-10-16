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
        Schema::create('school_archives', function (Blueprint $table) {
            $table->id();
            $table->string('archive_number')->unique();
            $table->string('title');
            $table->string('category');
            $table->string('school_year');
            $table->text('description');
            $table->string('file_name');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_archives');
    }
};
