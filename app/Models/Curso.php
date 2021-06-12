<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model //los modelos sirven para manipular una tabla con el mismo nombre en la base de datos
{
    use HasFactory;

    //protected $table = 'cursos' --para apuntar a una tabla fuera de las convenciones

    protected $fillable = ['name', 'description', 'categoria']; //dentro del array se especifican los campos que permite agregar a la base de datos
    //como son pocos campos, no se comento la variable FILLABLE
    /*protected $guarded = ['status']; // dentro del array se especifican los campos que se deben proteger o que no se deben modificar mediante el ingreso de datos de un form*/ 
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
