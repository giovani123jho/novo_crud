<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diciplina extends Model
{
    use HasFactory;
    protected $fillable = ['diciplina', 'professor', 'aulas'];
}
