<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Seccion;
 
class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $secciones=Seccion::orderBy('id','DESC')->paginate(3);
        return view('Seccion.index',compact('secciones')); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Seccion.create');
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
        $this->validate($request,[ 'seccionA'=>'required', 'seccionB'=>'required', 'seccionC'=>'required', 'seccionD'=>'required', 'seccionE'=>'required', 'seccionF'=>'required']);
        Seccion::create($request->all());
        return redirect()->route('seccion.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $secciones=Seccion::find($id);
        return  view('seccion.show',compact('secciones'));
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
        $seccion=seccion::find($id);
        return view('seccion.edit',compact('seccion'));
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
        $this->validate($request,['seccionA'=>'required', 'seccionB'=>'required', 'seccionC'=>'required', 'seccionD'=>'required', 'seccionE'=>'required', 'seccionF'=>'required']);
 
        seccion::find($id)->update($request->all());
        return redirect()->route('seccion.index')->with('success','Registro actualizado satisfactoriamente');
 
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
         Seccion::find($id)->delete();
        return redirect()->route('seccion.index')->with('success','Registro eliminado satisfactoriamente');
    }
}