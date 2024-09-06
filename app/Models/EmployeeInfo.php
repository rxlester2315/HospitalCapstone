<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    use HasFactory;

        protected $table = 'employee_info';

    protected $fillable = ['fullName', 'email', 'phoneNum', 'Department', 'address', 'birthdate', 'avats'];

protected $primaryKey = 'id'; // or any other column if it's different
public $incrementing = false; // if it's not auto-incrementing

    
}