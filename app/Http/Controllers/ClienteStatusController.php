<?php

namespace App\Http\Controllers;

use App\Models\ClienteStatus;
use Illuminate\Http\Request;

class ClienteStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clienteStatuses = ClienteStatus::all();
        return view('clientestatuses.index')
            ->with('clientestatuses',$clienteStatuses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientestatuses.create');
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

        $clientestatusCreado = ClienteStatus::create([
            'nombre' => $request->nombre
        ]);

        return redirect('clientestatuses')->with('mensaje','Cliente Status creado existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClienteStatus  $clienteStatus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('clientestatuses.perfil', [
            'clientestatus' => ClienteStatus::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClienteStatus  $clienteStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(ClienteStatus $clienteStatus)
    {
        return view('clientestatuses.edit')
            ->with('clientestatus',$clienteStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClienteStatus  $clienteStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClienteStatus $clienteStatus)
    {
        $request-> validate([
            'nombre' => 'required'
        ]);

        $clienteStatus->update($request->all());

        return redirect('clientestatuses')
            ->with('mensaje', 'Cliente Status actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClienteStatus  $clienteStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clienteStatus = ClienteStatus::findOrFail($id);
        $clienteStatus->delete();

        return redirect('clientestatuses')->with('mensaje','Cliente Status eliminado existosamente');
    }
}