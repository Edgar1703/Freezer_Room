<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Marisco;
 
class MariscoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mariscos=Marisco::orderBy('id','DESC')->paginate(3);
        return view('Marisco.index',compact('mariscos')); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Marisco.create');
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
        Marisco::create($request->all());
        return redirect()->route('marisco.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mariscos=Marisco::find($id);
        return  view('mariscos.show',compact('mariscos'));
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
        $marisco=Marisco::find($id);
        return view('marisco.edit',compact('marisco'));
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
 
        Marisco::find($id)->update($request->all());
        return redirect()->route('marisco.index')->with('success','Registro actualizado satisfactoriamente');
 
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
         Marisco::find($id)->delete();
        return redirect()->route('marisco.index')->with('success','Registro eliminado satisfactoriamente');
    }
}