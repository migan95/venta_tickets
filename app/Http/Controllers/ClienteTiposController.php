<?php

namespace App\Http\Controllers;

use App\Models\ClienteTipo;
use Illuminate\Http\Request;

class ClienteTiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clienteTipos = ClienteTipo::all();
        return view('clientetipos.index')
            ->with('clientetipos',$clienteTipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientetipos.create');
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
            'nombre' => 'required'
        ]);

        $clientetipoCreado = ClienteTipo::create([
            'nombre' => $request->nombre
        ]);

        return redirect('clientetipos')->with('mensaje','Cliente Tipo creado existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClienteTipo  $clienteTipo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('clientetipos.perfil', [
            'clientetipos' => ClienteTipo::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClienteTipo  $clienteTipo
     * @return \Illuminate\Http\Response
     */
    public function edit(ClienteTipo $clienteTipo)
    {
        return view('clientetipos.edit')
            ->with('clientetipo',$clienteTipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClienteTipo  $clienteTipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClienteTipo $clienteTipo)
    {
        $request-> validate([
            'nombre' => 'required'
        ]);

        $clienteTipo->update($request->all());

        return redirect('clientetipos')
            ->with('mensaje', 'Cliente tipo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClienteTipo  $clienteTipo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clienteTipo = ClienteTipo::findOrFail($id);
        $clienteTipo->delete();

        return redirect('clientetipos')->with('mensaje','Cliente tipo eliminado existosamente');
    }
}
