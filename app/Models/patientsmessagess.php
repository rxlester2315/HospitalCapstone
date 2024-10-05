<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientsmessagess extends Model
{
    use HasFactory;
    

            protected $table = 'patientsmessagess';
protected $fillable = ['from', 'to', 'message','doctor_id','patient_id'];



  public function sender()
    {
        return $this->belongsTo(User::class, 'from'); // 'from' refers to the sender
    }

    // Define the relationship to fetch the 'to' user (could be a patient or doctor)
    public function receiver()
    {
        return $this->belongsTo(User::class, 'to'); // 'to' refers to the receiver
    }

 

}