<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    protected $fillable = ['id_libro','id_estudiante','id_empleado','fecha_prestamo','fecha_entrega'];
}
