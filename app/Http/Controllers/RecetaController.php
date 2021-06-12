<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecetaRequest;

class RecetaController extends Controller
{
    // protected Paciente $paciente;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Paciente $paciente)
    {
        // $this->paciente = $paciente;
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
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
    public function create()
    {

        return view('receta.receta', ['receta' => new Receta()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecetaRequest $request)
    {
        Receta::create([

            'pacienteId' => $this->paciente->id,
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
