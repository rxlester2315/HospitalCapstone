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

 Schema::create('charttable', function (Blueprint $table) {
    $table->id();
    $table->year('year');
    $table->integer('total_patient');
    $table->integer('total_completed');
    $table->timestamps();
});

     

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_name');
    }
};