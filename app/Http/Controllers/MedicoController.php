<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMedicoRequest;

class MedicoController extends Controller
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
        $medicos = Medico::orderBy('created_at', 'desc')->paginate(10); 

        return view('medico.index', ['medicos' => $medicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medico.medico', ['medico' => new Medico()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicoRequest $request)
    {
        Medico::create($request->validated());
        
        return back()->with('status', 'Medico creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = Medico::findOrFail($id);
        return view('medico.show', ['medico' => $medico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Medico $medico)
    {
        return view('medico.edit', ['medico' => $medico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMedicoRequest $request, Medico $medico)
    {
        $medico->update($request->validated());

        return back()->with('status', 'Medico modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        $medico->delete();
        return back()->with('status', 'Medico borrado correctamente');
    }
}
