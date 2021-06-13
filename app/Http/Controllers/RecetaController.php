<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecetaRequest;

class RecetaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
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
        $pacienteId = session('pacienteId');

        Receta::create([

            'pacienteId' => $pacienteId,
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
        if(session()->has('pacienteId')){

            session(['pacienteId' => $id]);
            $paciente = Paciente::findOrFail($id);

            $recetas = Receta::where('PacienteId', $paciente->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        
            return view('receta.index', ['recetas' => $recetas]);

        }else{

            dd($id);
            $receta = Receta::findOrFail($id);

            return view('receta.show', ['receta' => $receta]);
        }       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receta = Receta::findOrFail($id);

        return view('receta.edit', ['receta' => $receta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRecetaRequest $request, Receta $receta)
    {
        $receta->update($request->validated());

        return back()->with('status', 'Receta modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        $receta->delete();

        return back()->with('status', 'Receta borrada correctamente');
    }
}
