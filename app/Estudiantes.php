<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $fillable = ['nombre','numero_de_cedula','carrera'];
}