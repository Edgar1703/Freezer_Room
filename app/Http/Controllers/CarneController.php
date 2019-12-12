<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Carne;
 
class CarneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carnes=Carne::orderBy('id','DESC')->paginate(3);
        return view('Carne.index',compact('carnes')); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Carne.create');
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
        Carne::create($request->all());
        return redirect()->route('carne.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carnes=Carne::find($id);
        return  view('carnes.show',compact('carnes'));
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
        $carne=Carne::find($id);
        return view('carne.edit',compact('carne'));
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
 
        carne::find($id)->update($request->all());
        return redirect()->route('carne.index')->with('success','Registro actualizado satisfactoriamente');
 
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
         Carne::find($id)->delete();
        return redirect()->route('carne.index')->with('success','Registro eliminado satisfactoriamente');
    }
}