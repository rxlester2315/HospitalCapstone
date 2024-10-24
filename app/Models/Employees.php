<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
      protected $fillable = [
        'name', 'specialty', 'phone', 'room', 'image', 'department',
        'present_days', 'dayoff', 'shift_start_time', 'shift_end_time'
    ];
    
    protected $casts = [
    'present_days' => 'array',
    'dayoff' => 'array',
];

public function appointments()
    {
        return $this->hasMany(Appointment::class, 'employee', 'name');
    }
}