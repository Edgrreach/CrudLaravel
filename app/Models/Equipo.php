<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Equipo extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dateFormat = 'M j Y h:i:s'; // o el formato que te sirva
}

