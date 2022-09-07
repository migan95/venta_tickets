<?php

namespace App\Http\Controllers;

use App\Models\Posicion;
use Illuminate\Http\Request;

class PosicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posiciones = Posicion::all();
        return view('posiciones.index')
            ->with('posiciones',$posiciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posiciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'posiciones' => 'required'
        ]);

        $eventoCreado = Posicion::create([
            'posiciones' => $request->posiciones
        ]);

        return redirect('posiciones')->with('mensaje','Posiciones creado existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posicion  $posicion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posiciones.perfil', [
            'posiciones' => Posicion::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posicion  $posicion
     * @return \Illuminate\Http\Response
     */
    public function edit(Posicion $posicion)
    {
        return view('posiciones.edit')
            ->with('posicion',$posicion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posicion  $posicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posicion $posicion)
    {
        $request ->validate([
            'posiciones' => 'required'
        ]);

        $posicion->update($request->all());

        return redirect('posiciones')
            ->with('mensaje', 'Posicion actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posicion  $posicion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posicion = Posicion::findOrFail($id);
        $posicion->delete();

        return redirect('posiciones')->with('mensaje','Posicion eliminada existosamente');
    }
}
