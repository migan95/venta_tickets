<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index')
            ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $request ->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $usuarioCreado = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 2
        ]);

        if($request->hasFile('imagen')){
            $this->guardarImagen($usuarioCreado,$request->file('imagen'));
        }

        return redirect('users')
            ->with('mensaje','Usuario creado existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        //
        return view('users.perfil',[
            'usuario' => User::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit')
            ->with('usuario',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request ->validate([
            'name' => 'required',
            'email' => 'required',
            'nit' => 'required',
            'dpi' => 'required',
            'role' => 'required',
            'telefono' => 'required'
        ]);

        $user->update($request->all());

        return redirect('users')
            ->with('mensaje', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('users')->with('mensaje','Usuario eliminado existosamente');
    }

    public function guardarImagen(User $user,UploadedFile $imagen){
        $path = 'public/uploads/usuarios';
        $name = $user->id() . '.' . $imagen->clientExtension();
        if(Storage::exists($path.'/'.$name)){
            Storage::delete($path.'/'.$name);
        }
        $imagen = Storage::putFileAs(
            $path,
            $imagen,
            $name
        );

        $user->update([
            'imagen' => str_replace('public','storage',$imagen)
        ]);
    }
}
