<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;



class Appointments extends Model
{
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    protected $fillable = ['date_receipt', 'doctor_signature_image','note_med_receipts',  'list_medicine','diseases','remarks','completed'];


  protected $casts = [
        'list_medicine' => 'array', // Automatically cast JSON to array
    ];

  public function doctor()
    {
        return $this->hasOne(Employees::class, 'name', 'employees'); 
       
    }
    




public function user()
{
    return $this->belongsTo(User::class, 'userid', 'id'); // Explicitly define foreign key
}



public function employee()
{
    // Here, 'name' is the column in the 'employees' table that matches 'employees' in the 'appointments' table
    return $this->belongsTo(Employees::class, 'employees', 'name');
}


}