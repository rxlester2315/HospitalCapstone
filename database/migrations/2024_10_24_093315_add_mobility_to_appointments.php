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
        Schema::table('appointments', function (Blueprint $table) {
         $table->string('mobility')->nullable();
         $table->string('allergies')->nullable();
         $table->string('painlevel')->nullable();
         $table->string('mentalstatus')->nullable();
         $table->string('Hearrate')->nullable();
         $table->string('Weight')->nullable();
        $table->string('Height')->nullable();
       

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {

            $table->dropColumn('mobility');
            $table->dropColumn('allergies');
            $table->dropColumn('painlevel');
            $table->dropColumn('mentalstatus');
            $table->dropColumn('Hearrate');
            $table->dropColumn('Weight');
            $table->dropColumn('Height');


        });
    }
};