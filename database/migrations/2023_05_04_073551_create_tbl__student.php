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
        Schema::create('tbl__student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->unsignedInteger('Fk_parent_id');
            $table->string('gender');
            $table->timestamps();
            $table->foreign('Fk_parent_id')->references('id')->on('tbl_parent')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl__student');
    }
};
