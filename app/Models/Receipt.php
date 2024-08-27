<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

     protected $fillable = [
        'date',
        'patient_name',
        'patient_id',
        'list_of_medicine',
        'doctor_signature_image_path',
    ];



     protected $casts = [
        'list_of_medicine' => 'array', // Automatically cast JSON to array
    ];
}