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
       Schema::create('patientsmessagess', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('doctor_id');  // ID of the doctor
        $table->unsignedBigInteger('patient_id'); // ID of the patient
        $table->text('message');                  // The actual message text
        $table->enum('from', ['doctor', 'patient']); // Who sent the message (doctor/patient)
        $table->timestamps();                     // Created at and updated at timestamps
        
       
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patientsmessagess');
    }
};