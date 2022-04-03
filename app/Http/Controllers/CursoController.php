<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    //Como convención el controlador va en mayuscula y singular, junto Controller 

    public function index()
    {
        $cursos=Curso::orderBy('id','desc')->paginate(10);

        return view('cursos.index',compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }


    //al declarar que este objeto request que le pasamos va a ser de la clase StoreCurso le haremos pasar las validaciones antes de que se pueda meter en nuestra DDBB
    public function store(StoreCurso $request)
    {
        //La validación no es del todo correcta ponerla aquí así que la tenemos en el app/http/request. Pero funcionaría.

        /* $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]); */


        // Asignación manual de propiedades a guardar en un nuevo registro

        
        /* $curso=new Curso;
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;
        $curso->save(); */

        // Asignación masiva de propiedades a guardar en un nuevo registro
        // Por temas de seguridad y que no nos cuelen nada en columnas que sean sensibles de rellenar por administradores
        // Tenemos que poner filtros en el model $fillable $guarded (mirar el modelo para mas info)

        /***versión 1 
        $curso=Curso::create([
            'name'=>$request->name,
            'descripcion'=>$request->descripcion,
            'categoria'=>$request->categoria,
        ]);*/

        /***versión 2 */
        $curso=Curso::create($request->all());
                
        return redirect()->route('cursos.show',compact('curso'));
    }

    public function show(Curso $curso)
    {
        return view('cursos.show',compact('curso'));
    }
    
    public function edit(Curso $curso)
    {
        return view('cursos.edit',compact('curso'));
    }

    public function update(StoreCurso $request, Curso $curso)
    { 
        /* $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]); */        

        /* $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;
        $curso->save(); */

        $curso->update($request->all());

        return redirect()->route('cursos.show',compact('curso'));
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
