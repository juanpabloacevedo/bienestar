<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Clase;
use App\Reserva;
use App\Espacio;
use App\Estado;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $reservas=Reserva::all();
        return view('admin.reservas')
        ->with('reservas',$reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $espacios=Espacio::all();
        $clases=Clase::all();
        $estados=Estado::all();
        return view('admin.reservaregister')
        ->with('clases',$clases)
        ->with('espacios',$espacios)
        ->with('estados',$estados);
    }
    
    public function create_reserva()
    {   
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        /**datos obligatorios para el registro */
        $rules = [
            'id_clase'      => 'required|max:255',
            ];
        /**credenciales minimas de registro */
        $credentials = $request->only(
            'id_clase'			
        );
        /**si los datos son incorrectos dirijase a registro */
        $validator = Validator::make($credentials, $rules);
        if($validator->fails()) {
            return response()->json($validator->errors());
            return redirect()->route('admin')        
            ->with('errors', $validator->errors());
        }
            
        /**creacion del usuario,estos datos son los mismos de la migracion o base de datos*/
        $reserva = new Reserva();        
        $reserva->id_espacio    = $request->id_espacio;		
        $reserva->id_clase    = $request->id_clase;        
        $reserva->inicio = Carbon::parse($request->inicio_dia.' '.$request->inicio_hora)->format('Y-m-d H:m');
        $reserva->fin= Carbon::parse($request->fin_dia.' '.$request->fin_hora)->format('Y-m-d H:m');
        $reserva->name      = $reserva->id+$reserva->id_clase;
        $reserva->id_estado=1;
        $reserva->save();
        return redirect()->route('indexreserva');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
