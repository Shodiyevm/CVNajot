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
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->unsignedBigInteger('hard_skill_id')->nullable();
            $table->unsignedBigInteger('soft_skill_id')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('experience_id')->nullable();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->foreign('hard_skill_id')->references('id')->on('hard_skills');
            $table->foreign('soft_skill_id')->references('id')->on('soft_skills');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('experience_id')->references('id')->on('experiences');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
