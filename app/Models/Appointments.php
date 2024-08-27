<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Appointments extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['date_receipt', 'doctor_signature_image','note_med_receipts',  'list_medicine'];


  protected $casts = [
        'list_medicine' => 'array', // Automatically cast JSON to array
    ];
}