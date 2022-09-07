<?php

namespace App\Http\Controllers;

use App\Models\TicketPosicion;
use Illuminate\Http\Request;

class TicketPosicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketPosicions = TicketPosicion::all();
        return view('ticketposiciones.index')
            ->with('ticketposiciones',$ticketPosicions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticketposiciones.create');
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
            'posicion' => 'required'
        ]);

        $posicionCreada = TicketPosicion::create([
            'posicion' => $request->posiciones
        ]);

        return redirect('ticketposiciones')->with('mensaje','Ticket Posicion creada existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketPosicion  $ticketPosicion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ticketposiciones.perfil', [
            'ticketposiciones' => TicketPosicion::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketPosicion  $ticketPosicion
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketPosicion $ticketPosicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketPosicion  $ticketPosicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketPosicion $ticketPosicion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketPosicion  $ticketPosicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketPosicion $ticketPosicion)
    {
        //
    }
}
