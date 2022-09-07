<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificacions = Clasificacion::all();
        return view('clasificacions.index')
            ->with('clasificacions',$clasificacions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clasificacions.create');
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
            'nombre' => 'required',
            'edad_minima' => 'required',
            'edad_maxima' => 'required'
        ]);

        $clasificacionCreado = Clasificacion::create([
            'nombre' => $request->nombre,
            'edad_minima' => $request->edad_minima,
            'edad_maxima' => $request->edad_maxima
        ]);

        return redirect('clasificacions')->with('mensaje','Clasificacion creada existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('clasificacions.perfil', [
            'clasificacion' => Clasificacion::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Clasificacion $clasificacion)
    {
        return view('clasificacions.edit')
            ->with('clasificacion',$clasificacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clasificacion $clasificacion)
    {
        $request-> validate([
            'nombre' => 'required',
            'edad_minima' => 'required',
            'edad_maxima' => 'required'
        ]);

        $clasificacion->update($request->all());

        return redirect('clasificacions')
            ->with('mensaje', 'Clasificacion actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clasificacion = Clasificacion::findOrFail($id);
        $clasificacion->delete();

        return redirect('clasificacions')->with('mensaje','Clasificacion eliminada existosamente');
    }
}
