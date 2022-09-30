<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Evento;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentUser = \Illuminate\Support\Facades\Auth::user();

        return view('carritos.index')
        ->with('eventos',$currentUser->eventos());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carritos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'ticket_id' => 'required'
        ]);

        $currentUser = \Illuminate\Support\Facades\Auth::user();

        $carritoCreado = Carrito::create([
            'ticket_id' => $request->ticket_id,
            'user_id' => $currentUser->id
        ]);

        return redirect('carritos')->with('mensaje','Carrito cargado existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrito  $Carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrito  $Carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        return view('carritos.edit')
            ->with('carritos',$carrito);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrito  $Carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        $request-> validate([
            'precio' => 'required',
            'posicion' => 'required',
            'codigo' => 'required'
        ]);

        $carrito->update($request->all());

        return redirect('carritos')
            ->with('mensaje', 'Carrito actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrito  $Carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrito = Carrito::findOrFail($id);
        $carrito->delete();

        return back()->with('mensaje','Carrito actualizado existosamente');
    }
}
