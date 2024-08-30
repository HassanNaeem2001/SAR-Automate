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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Student_Name');
            $table->string('Student_Email');
            $table->string('Student_Phone');
            $table->string('Student_Paternal_Phone');
            $table->string('Student_Address');
            $table->integer('Student_Batch_Id');
            $table->foreign('Student_Batch_Id')->references('id')->on('batches');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
