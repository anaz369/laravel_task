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
        Schema::create('tbl_student_opted_course', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('course_id');
            $table->integer('is_active');
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('tbl__student')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('tbl__course')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_student_opted_course');
    }
};
