<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecetaRequest;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param int $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Paciente $paciente)
    {
        return view('receta.receta', ['receta' => new Receta(), 'paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecetaRequest $request, Paciente $paciente)
    {
        Receta::create([

            'pacienteId' => $paciente->id,
            'padecimineto' => $request['padecimineto'],
            'medicamento' => $request['medicamento'],
            'fecha_inicio_tratamiento' => $request['fecha_inicio_tratamiento']

        ]);

        $mensaje = 'Receta registrado correctamente';

        
        
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
        $recetas = Receta::where('PacienteId', $paciente->id)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('receta.index', ['recetas' => $recetas, 'paciente' => $paciente]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
