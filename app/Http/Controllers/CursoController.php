<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));

    }

    public function create(){
        return view('cursos.create');

    }

    public function store(Request $request){
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show',$curso);
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

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

}
