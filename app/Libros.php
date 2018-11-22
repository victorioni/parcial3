<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    protected $fillable = ['nombre','editorial','ano','ubicacion','autor','tipo','area_de_conocimiento','dias_de_prestamo'];
}