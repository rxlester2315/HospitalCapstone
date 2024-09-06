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
        Schema::create('employee_info', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('Department')->nullable();
            $table->string('address')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('email')->nullable();
            $table->string('avats')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_info');
    }
};