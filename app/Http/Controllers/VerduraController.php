<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Verdura;
 
class VerduraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $verduras=Verdura::orderBy('id','DESC')->paginate(3);
        return view('Verdura.index',compact('verduras')); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Verdura.create');
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
        Verdura::create($request->all());
        return redirect()->route('verdura.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $verduras=Verdura::find($id);
        return  view('verduras.show',compact('verduras'));
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
        $verdura=Verdura::find($id);
        return view('verdura.edit',compact('verdura'));
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
 
        Verdura::find($id)->update($request->all());
        return redirect()->route('verdura.index')->with('success','Registro actualizado satisfactoriamente');
 
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
         Verdura::find($id)->delete();
        return redirect()->route('verdura.index')->with('success','Registro eliminado satisfactoriamente');
    }
}