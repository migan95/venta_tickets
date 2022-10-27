<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index')
            ->with('eventos',$eventos);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index_crud()
    {
        if(Auth::user()->role == 1){
            $eventos = Evento::all();
            return view('eventos.index_crud')
                ->with('eventos',$eventos);
        }elseif(Auth::user()->role == 3){
            $eventos = Evento::where('user_id',Auth::id())->get();
            return view('eventos.index_crud')
                ->with('eventos',$eventos);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
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
            'titulo' => 'required',
            'descripcion' => 'required',
            'precio' => 'required'
        ]);

        $eventoCreado = Evento::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'user_id' => Auth::id(),
        ]);

        if($request->hasFile('imagen')){
            $this->guardarImagen($eventoCreado,$request->file('imagen'));
        }

        return redirect('eventos')->with('mensaje','Evento creado existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function show($id)
    {
        return view('eventos.perfil', [
            'evento' => Evento::findOrFail($id)
        ]);
    }
*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        return view('eventos.edit')
            ->with('evento',$evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $request ->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'precio' => 'required'
        ]);

        $evento->update($request->all());

        return redirect()->route('indexEventosCrud')
            ->with('mensaje', 'Evento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect('eventos')->with('mensaje','Evento eliminado existosamente');
    }

    public function guardarImagen(Evento $evento,UploadedFile $imagen){
        $path = 'public/img/eventos';
        $name = $evento->id . '.' . $imagen->clientExtension();
        if(Storage::exists($path.'/'.$name)){
            Storage::delete($path.'/'.$name);
        }
        $imagen = Storage::putFileAs(
            $path,
            $imagen,
            $name
        );

        $evento->update([
            'imagen' => str_replace('public','storage',$imagen)
        ]);
    }
}
