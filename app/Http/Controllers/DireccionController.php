<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDireccion;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $direcciones = Direccion::orderBy('created_at', 'desc')->paginate(10); 

        return view('direccion.index', ['direcciones' => $direcciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('direccion.direccion', ['direccion' => new Direccion()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDireccion $request)
    {
        Direccion::create($request->validated());
        
        return back()->with('status', 'Direccion creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direccion = Direccion::findOrFail($id);
        return view('direccion.show', ['direccion' => $direccion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Direccion $direccion)
    {
        return view('direccion.edit', ['direccion' => $direccion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDireccion $request, Direccion $direccion)
    {
        $direccion->update($request->validated());

        return back()->with('status', 'Direccion modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccion)
    {
        $direccion->delete();
        return back()->with('status', 'Direccion borrada correctamente');
    }
}
