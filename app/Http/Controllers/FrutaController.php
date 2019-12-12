<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Fruta;
 
class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $frutas=Fruta::orderBy('id','DESC')->paginate(3);
        return view('Fruta.index',compact('frutas')); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Fruta.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'seccion'=>'required', 'cantidad'=>'required']);
        Fruta::create($request->all());
        return redirect()->route('fruta.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $frutas=Fruta::find($id);
        return  view('frutas.show',compact('frutas'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $fruta=Fruta::find($id);
        return view('fruta.edit',compact('fruta'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'seccion'=>'required', 'cantidad'=>'required']);
 
        Fruta::find($id)->update($request->all());
        return redirect()->route('fruta.index')->with('success','Registro actualizado satisfactoriamente');
 
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Fruta::find($id)->delete();
        return redirect()->route('fruta.index')->with('success','Registro eliminado satisfactoriamente');
    }
}