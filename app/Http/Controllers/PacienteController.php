<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Receta;
use App\Models\Paciente;
use App\Models\Direccion;
use Illuminate\Http\Request;
use App\Http\Requests\StorePaciente;
use App\Http\Requests\StoreDireccion;

class PacienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::orderBy('created_at', 'desc')->paginate(10); 

        return view('paciente.index', ['pacientes' => $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.paciente', ['paciente' => new Paciente(), 'direccion' => new Direccion()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaciente $request, StoreDireccion $request2)
    {
        $direccion = Direccion::create($request2->validated());
        
        $medico = Medico::find($request['medicoId']);
        
        if($medico){
            
            if($direccion){

                Paciente::create([
    
                    'medicoId' => $medico->id,
                    'direccionId' => $direccion->id,
                    'nombre' => $request['nombre'],
                    'ap_paterno' => $request['ap_paterno'],
                    'ap_materno' => $request['ap_materno'],
                    'edad' => $request['edad']
    
                ]);
    
                $mensaje = 'Paciente registrado correctamente';
    
            }else{
    
                $mensaje = 'ERROR al ingresar al paciente';
            }

        }else{

            $direccion->delete();
            
            $mensaje = 'ERROR el medico no existe, registralo en la pestaña medicos';
        }
        
        
        return back()->with('status', $mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        $direccion = Direccion::findOrFail($paciente->direccionId);

        return view('paciente.show', ['paciente' => $paciente, 'direccion' => $direccion]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        
        $direccion = Direccion::findOrFail($paciente->direccionId);

        return view('paciente.edit', ['paciente' => $paciente, 'direccion' => $direccion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePaciente $request, Paciente $paciente, StoreDireccion $requestD)
    {
        Direccion::find($paciente->direccionId)->update($requestD->validated());

        $paciente->update($request->validated());

        return back()->with('status', 'Paciente modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $direccion = Direccion::findOrFail($paciente->direccionId);
        $recetas = Receta::where('PacienteId', $paciente->id);

        $recetas->delete();
        $paciente->delete();
        $direccion->delete();
        

        return back()->with('status', 'Paciente borrado correctamente');
    }
}
