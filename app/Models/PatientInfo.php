<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInfo extends Model
{
    use HasFactory;
         protected $fillable = ['user_id','firstName', 'lastName', 'birthdate', 'number','address','email'];

         protected $table = 'patient_information';

  public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}