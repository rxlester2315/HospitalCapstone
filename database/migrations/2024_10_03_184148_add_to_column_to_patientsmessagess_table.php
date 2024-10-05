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
        Schema::table('patientsmessagess', function (Blueprint $table) {
                    $table->unsignedBigInteger('to')->after('from'); // Adjust type and position as necessary

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patientsmessagess', function (Blueprint $table) {
                    $table->dropColumn('to');

        });
    }
};
