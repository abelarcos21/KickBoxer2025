<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrenador;
use Carbon\Carbon;

class EntrenadorController extends Controller
{
    public function index(Request $request){

        //El código del controlador queda más limpio y legible usando scopes:
        $entrenadores = Entrenador::curp($request->curp)
        ->apellidoPaterno($request->apellido_paterno)
        ->añoNacimiento($request->año_nacimiento)
        ->genero($request->genero)
        ->gradoKickboxing($request->grado_kickboxing)
        ->paginate(10);

        return view('entrenadores.index', compact('entrenadores'));

        //$entrenadores = Entrenador::all();
        //return view('entrenadores.index', compact('entrenadores'));
    }

    public function create(){
        return view('entrenadores.create');
    }

    public function store(Request $request){

        //dd($request);

        // Validación de datos
        $validated = $request->validate([
            'curp' => 'required|string|max:18|unique:entrenadors',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'primer_nombre' => 'required|string|max:255',
            'segundo_nombre' => 'nullable|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            //'año_nacimiento' => 'required|integer|digits:4', //campo calculado automatico mediante campo fecha_nacimiento
            'fecha_nacimiento' => 'required|date',
            //'edad' => 'required|integer', //campo calculado automatico mediante campo fecha_nacimiento
            'genero' => 'required|in:Masculino,Femenino,Otro',
            'nacionalidad' => 'required|string|max:255',
            'domicilio' => 'required|string|max:255',
            'colonia' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'codigo_postal' => 'required|string|max:5',
            'estado' => 'required|string|max:255',
            'correo' => 'required|email|unique:entrenadors',
            'telefono' => 'required|string|max:10',
            'escolaridad' => 'required|string|max:255',
            'grado_kickboxing' => 'nullable|string|max:255',
        ]);

        //guardar ruta dela imagen
        if($request->hasFile('imagen')){
            $rutaImagen = $request->file('imagen')->store('entrenadores', 'public');//guarda la imagen en storage app/public/entrenadores
            $validated['imagen'] = $rutaImagen;//guarda la ruta de la img en la BD
        }

        $fechaNacimiento = Carbon::parse($validated['fecha_nacimiento']);//Instancia de Carbon para el formato  2023-01-01
        //-----------------------------------------------------------------------------------------------------------------

        //Campos calculados año de nacimiento y edad, mediante el campo fecha_nacimiento  llenados automaticos ala BD
        $validated['año_nacimiento'] = $fechaNacimiento->year;
        $validated['edad'] = $fechaNacimiento->age;


        // Guardar en la base de datos
        Entrenador::create($validated);

        return redirect()->route('entrenador.index')->with('success', 'Registro creado exitosamente.');

    }

    //METODO PARA LLAMAR ALA VISTA EDIT
    public function edit(Entrenador $entrenador){
        return view('entrenadores.edit', compact('entrenador'));
    }

    //METODO PARA LLAMAR ALA VISTA SHOW(VER EL ENTRENADOR DATOS COMPLETOS)
    public function show(Entrenador $entrenador){
        return view('entrenadores.show', compact('entrenador'));
    }

    //METODO PARA ACTUALIZAR LOS DATOS
    public function update(Request $request, Entrenador $entrenador){

        // Validación de datos
        $validated = $request->validate([
            'curp' => 'required|string|max:18|unique:entrenadors',
            'primer_nombre' => 'required|string|max:255',
            'segundo_nombre' => 'nullable|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|in:Masculino,Femenino,Otro',
            'nacionalidad' => 'required|string|max:255',
            'domicilio' => 'required|string|max:255',
            'colonia' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'codigo_postal' => 'required|string|max:5',
            'estado' => 'required|string|max:255',
            'correo' => 'required|email|unique:entrenadors',
            'telefono' => 'required|string|max:10',
            'escolaridad' => 'required|string|max:255',
            'grado_kickboxing' => 'nullable|string|max:255',
        ]);


        // Calcular año de nacimiento y edad automáticamente
        $fechaNacimiento = Carbon::parse($validated['fecha_nacimiento']);
        $validated['año_nacimiento'] = $fechaNacimiento->year;
        $validated['edad'] = $fechaNacimiento->age;

        // metodo fill es igual que el método save() pero sin crear un nuevo registro
        $entrenador->fill($validated);

        $entrenador->save();

        return redirect()->route('entrenador.index')->with('success', 'La Informacion del Entrenador se Actualizo Correctamente');


    }

    //ELIMINAR UN REGISTRO LOGICAMENTE
    public function destroy(Entrenador $entrenador){

        $nombreEntrenador = $entrenador->primer_nombre;
        $entrenador->delete();//softdelete

        return redirect()->route('entrenador.index')->with('success', 'El Entrenador'.$nombreEntrenador.' se Elimino Correctamente');

    }

    //RESTAURAR UN REGISTRO ELIMINADO
    public function restore($id){

        $entrenador = Entrenador::withTrashed()->findOrFail($id);
        $entrenador->restore(); // Restaurar el registro
        return redirect()->route('entrenador.index')->with('success', 'Entrenador restaurado correctamente.');

    }

    // Mostrar registros eliminados
    public function trashed()
    {
        $entrenadores = Entrenador::onlyTrashed()->get();
        return view('entrenadoreseliminados.trashed', compact('entrenadores'));
    }

    // Eliminación permanente
    public function forceDelete(Entrenador $entrenador)
    {
        $entrenador = Entrenador::withTrashed()->findOrFail($entrenador);
        $entrenador->forceDelete();
        return redirect()->route('entrenadores.index')->with('success', 'Entrenador eliminado permanentemente');
    }


}
