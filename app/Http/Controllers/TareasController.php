<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Tarea;
use App\Estado;
use Illuminate\Support\Facades\Redirect;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = User::find(Auth::id())->tareas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarea = new Tarea();
        $estados = Estado::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //Crear tarea nueva.
   $tarea = new Tarea();
   $tarea->titulo = $request->titulo;
   $tarea->descripcion = $request->descripcion;
   $tarea->estado_id = $request->estado_id;
   $tarea->user_id = Auth::id();
   $tarea->save();
   //Redirigir a la lista de tareas.
   return Redirect::to('tareas')->with('notice', 'Tarea guardada correctamente.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Tarea::find($id);
        $estados = Estado::all();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarea = Tarea::find($id);
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->estado_id = $request->estado_id;
        $tarea->user_id = Auth::id();
        $tarea->save();
        return Redirect::to('tareas')->with('notice', 'Tarea guardada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarea = Tarea::where(array(
            'id' => $id,
            'user_id' => Auth::id()
        ))->first();
        $tarea->delete();
    }
}
