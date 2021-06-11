<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));

    }

    public function create(){
        return view('cursos.create');

    }

    /* public function show($curso){
        return view('cursos.show', compact('curso')); //compact('curso') == ['curso' => $curso]

    } */
    
    public function show($id, $categoria = null){

        $curso = Curso::find($id);

        if ($categoria){
            return view('cursos.category', ['curso' => $curso, 'categoria' => $categoria]); 
        } else {
            return view('cursos.show', compact('curso')); //compact('curso') == ['curso' => $curso]
        }
    }
}
