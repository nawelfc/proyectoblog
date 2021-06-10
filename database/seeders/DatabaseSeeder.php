<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        //$this->call(CursoSeeder::class); SE UTILIZABA EN VERSIONES VIEJAS DE LARAVEL

        //creacion de un registro seeder comandos tinker, este codigo iba en un archivo seeder separado en versiones anteriores
        /*
        $curso = new Curso;
        $curso->name= 'laravel';
        $curso->description='el mejor frameworkkk';
        $curso->save(); 
        */
        User::factory(10)->create();
        Curso::factory(100)->create();
    }
}
