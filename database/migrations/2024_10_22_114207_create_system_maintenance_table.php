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
        Schema::create('system_maintenance', function (Blueprint $table) {
            $table->id();
            $table->date('maintenance_date')->nullable(); // Nullable date column
            $table->string('descriptions')->nullable(); // Nullable string column
            $table->string('bugs')->nullable(); // Nullable string column
            $table->string('effect')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_maintenance');
    }
};