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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('BatchCode');
            $table->string('BatchType');
            $table->string('BatchTimings');
            $table->string('BatchStartingDate')->default(now());
            $table->integer('BatchCourseFamily');
            $table->integer('BatchFaculty');
            $table->foreign('BatchCourseFamily')->references('id')->on('course_families');
            $table->foreign('BatchFaculty')->references('id')->on('staff');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
