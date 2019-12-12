<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Temperatura;
 
class TemperaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $temperaturas=Temperatura::orderBy('id','DESC')->paginate(3);
        return view('Temperatura.index',compact('temperaturas')); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Temperatura.create');
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
        $this->validate($request,[ 'fecha'=>'required', 'hora'=>'required', 'seccion'=>'required', 'temperatura'=>'required']);
        Temperatura::create($request->all());
        return redirect()->route('temperatura.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $temperaturas=Temperatura::find($id);
        return  view('temperatura.show',compact('temperaturas'));
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
        $temperatura=temperatura::find($id);
        return view('temperatura.edit',compact('temperatura'));
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
        $this->validate($request,[ 'fecha'=>'required', 'hora'=>'required', 'seccion'=>'required', 'temperatura'=>'required']);
 
        temperatura::find($id)->update($request->all());
        return redirect()->route('temperatura.index')->with('success','Registro actualizado satisfactoriamente');
 
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
         Temperatura::find($id)->delete();
        return redirect()->route('temperatura.index')->with('success','Registro eliminado satisfactoriamente');
    }
}