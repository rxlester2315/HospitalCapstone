<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_system extends Model
{
    use HasFactory;

            protected $table = 'system_maintenance';

         protected $fillable = ['maintenance_date', 'descriptions', 'bugs', 'effect'];




}