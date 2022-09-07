<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index')
            ->with('tickets',$tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
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
            'precio' => 'required',
            'costo' => 'required',
            'posicion' => 'required',
            'codigo' => 'required'
        ]);

        $ticketCreado = Ticket::create([
            'precio' => $request->precio,
            'costo' => $request->costo,
            'posicion' => $request->posicion,
            'codigo' => $request->codigo
        ]);

        return redirect('tickets')->with('mensaje','Ticket creado existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('tickets.perfil', [
            'ticket' => Ticket::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit')
            ->with('ticket',$ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request ->validate([
            'precio' => 'required',
            'costo' => 'required',
            'posicion' => 'required',
            'codigo' => 'required'
        ]);

        $ticket->update($request->all());

        return redirect('tickets')
            ->with('mensaje', 'Ticket actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect('tickets')->with('mensaje','Ticket eliminado existosamente');
    }
}
