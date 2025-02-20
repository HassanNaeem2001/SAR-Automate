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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('StaffName');
            $table->string('StaffEmail');
            $table->string('StaffPassword');
            $table->string('StaffImage');
            $table->string('StaffStatus')->default('Active');
            $table->string('StaffPhone');
            $table->string('StaffAddress');
            $table->string('StaffHomePhone');
            $table->integer('StaffRole');
            $table->foreign('StaffRole')->references('id')->on('roles');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
