<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillable = ['nombre','numero_de_cedula','ocupacion'];
}