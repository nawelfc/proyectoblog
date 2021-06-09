<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $table = 'cursos' --para apuntar a una tabla fuera de las convenciones

/* CODIGO PARA AGREGAR/MODIFICAR UN REGISTRO
    use App\Models\Curso;
    $curso = new Curso;
    $curso->name= 'laravel'
    $curso->description='el mejor frameworkkk';
    $curso->save();
    */
}
