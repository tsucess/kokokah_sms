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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->foreignId('academic_session_id')->constrained('academic_sessions')->onDelete('cascade');
            $table->decimal('score', 5, 2); // Score out of total
            $table->decimal('total', 5, 2)->default(100); // Total marks
            $table->string('grade')->nullable(); // A, B, C, D, F
            $table->text('remarks')->nullable();
            $table->timestamps();

            // Ensure unique grade per student per subject per session
            $table->unique(['student_id', 'subject_id', 'academic_session_id'], 'unique_student_subject_session');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};

