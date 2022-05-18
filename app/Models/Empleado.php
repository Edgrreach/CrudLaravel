<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    //public $timestamps = false;
    protected $dateFormat = 'M j Y h:i:s'; // o el formato que te sirva
}
