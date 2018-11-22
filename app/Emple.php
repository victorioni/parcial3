<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emple extends Model
{
    protected $fillable = ['nombre','numero_de_cedula','ocupacion'];
}
