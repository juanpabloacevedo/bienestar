<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Sede;
use App\Espacio;

class EspacioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $espacios=Espacio::all();
        return view('admin.espacios')
        ->with('espacios',$espacios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
    /**datos obligatorios para el registro */
    $rules = [
        'name'      => 'required|max:255',
        ];
    /**credenciales minimas de registro */
    $credentials = $request->only(
        'name'			
    );
    /**si los datos son incorrectos dirijase a registro */
    $validator = Validator::make($credentials, $rules);
    if($validator->fails()) {
        return redirect()->route('registerespacio')
        ->with('errors', $validator->errors());
    }
        
    /**creacion del usuario,estos datos son los mismos de la migracion o base de datos*/
    $espacio = new Espacio();
    $espacio->nombre_espacio      = $request->name;
    $espacio->cantidad_usuarios    =$request->capacidad;		
    $espacio->id_sede    =$request->id_sede;
    $espacio->espacio_disponible=true;
    $espacio->save();
    return redirect()->route('indexespacio');

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function show(Espacio $espacio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function edit(Espacio $espacio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Espacio $espacio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Espacio $espacio)
    {
        //
    }
    public function create_register(){
        $sedes=Sede::all();
        return view('admin.espacioregister')
        ->with('sedes',$sedes);
    }
}
