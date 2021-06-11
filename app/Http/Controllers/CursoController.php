<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
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

    public function store(StoreCurso $request){ //request solicita lo que le transfiere el formulario, por ej el token
        
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
    
    public function show(Curso $id, $categoria = null){

        $curso = $id;

        if ($categoria){
            return view('cursos.category', ['curso' => $curso, 'categoria' => $categoria]); 
        } else {
            return view('cursos.show', compact('curso')); //compact('curso') == ['curso' => $curso]
        }
    }

    public function edit(Curso $id){
        $curso = $id;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        //si no se necesita personalizar las validaciones, se colocan como esta aqui debajo. De lo contrario se requiere crear un FormRequest para personalizarlas.
        $request->validate([
            'name' => 'required|max:50',
            'description' => 'required|min:10',
            'categoria' => 'required'
        ]);
        
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show',$curso);
    }

}
