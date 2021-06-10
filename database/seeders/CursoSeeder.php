<?php

namespace Database\Seeders;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creacion de un registro seeder
        $curso = new Curso;
        $curso->name= 'laravel';
        $curso->description='el mejor frameworkkk';
        $curso->save();
    }
}
