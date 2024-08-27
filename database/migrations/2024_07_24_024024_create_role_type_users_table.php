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
       Schema::create('role_type_users', function (Blueprint $table) {
            $table->id();
            $table->string('role_type')->nullable();
            $table->timestamps();
        });

         DB::table('role_type_users')->insert([
            ['role_type' => 'Super Admin'],
            ['role_type' => 'Admin'],
             ['role_type' => 'Human Resources'],
            ['role_type' => 'Doctor'],
            ['role_type' => 'Normal User']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_type_users');
    }
};