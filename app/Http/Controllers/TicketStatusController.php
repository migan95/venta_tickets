<?php

namespace App\Http\Controllers;

use App\Models\TicketStatus;
use Illuminate\Http\Request;

class TicketStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketstatuses = TicketStatus::all();
        return view('ticketstatuses.index')
            ->with('ticketstatuses',$ticketstatuses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticketstatuses.create');
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

        $ticketStatusCreado = TicketStatus::create([
            'nombre' => $request->nombre
        ]);

        return redirect('ticketstatuses')->with('mensaje','Evento creado existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketStatus  $ticketStatus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ticketstatuses.perfil', [
            'ticketstatus' => TicketStatus::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketStatus  $ticketStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketStatus $ticketStatus)
    {
        return view('ticketstatuses.edit')
            ->with('ticketstatus',$ticketStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketStatus  $ticketStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketStatus $ticketStatus)
    {
        $request-> validate([
            'nombre' => 'required',
            'edad_minima' => 'required',
            'edad_maxima' => 'required'
        ]);

        $ticketStatus->update($request->all());

        return redirect('ticketstatuses')
            ->with('mensaje', 'Ticket status actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketStatus  $ticketStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticketStatus = TicketStatus::findOrFail($id);
        $ticketStatus->delete();

        return redirect('ticketstatuses')->with('mensaje','Ticket status eliminado existosamente');
    }
}
