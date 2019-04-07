<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\EspacioDeportivo;
use Session;
use Illuminate\Support\Facades\Auth;

class EspaciosDeportivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $espaciosDeportivos=EspacioDeportivo::all();
        return view('admin.espaciosdeportivos',compact('espaciosDeportivos'));
    }
    public function register(Request $request){
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
            return redirect()->route('registerespdep')
            ->with('errors', $validator->errors());
		}
               
        /**creacion del usuario,estos datos son los mismos de la migracion o base de datos*/
        $espdep = new EspacioDeportivo();
		$espdep->name      = $request->name;		
        $espdep->id_user    =$request->id_user;
		$espdep->save();
        return redirect()->route('admin',['title'=>'HOME'])->with('group','HOME');;
        }
        public function create_register(Request $request){
            $errors=Session::get('errors');
            $users = User::where('id_rol',2)->get();
            return view('admin.espaciodepregister')
            ->with('users',$users)
            ->with('errors', $errors);
        }  
        public function listaespaciosdeportivos(){
            $espaciosdep=EspacioDeportivo::all();
            return view('admin.espaciosdeportivos',compact('espaciosdep'));
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
     * @param  \App\Espacios_deportivo  $espacios_deportivo
     * @return \Illuminate\Http\Response
     */
    public function show(Espacios_deportivo $espacios_deportivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Espacios_deportivo  $espacios_deportivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Espacios_deportivo $espacios_deportivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Espacios_deportivo  $espacios_deportivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Espacios_deportivo $espacios_deportivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Espacios_deportivo  $espacios_deportivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Espacios_deportivo $espacios_deportivo)
    {
        //
    }
}
