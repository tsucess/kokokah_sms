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
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id();
            $table->string('code'); // e.g., "JSS1A", "Nur 1"
            $table->string('name'); // e.g., "Junior Secondary School 1A", "Nursery 1"
            $table->string('level'); // e.g., "Nursery", "Primary", "JSS", "SSS"
            $table->integer('capacity')->default(30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_classes');
    }
};

