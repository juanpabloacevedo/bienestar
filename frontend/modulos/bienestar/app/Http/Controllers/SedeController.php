<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Sede;
class SedeController extends Controller
{
    public function index(){
        $sedes=Sede::all();
        return view('admin.sedes',compact('sedes'));
    }
    public function create(Request $request){
        $errors=Session::get('errors');
        $sedes = Sede::all();
        return view('admin.sederegister')
        ->with('sedes',$sedes)
        ->with('errors', $errors);
    }

    public function store(Request $request){
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
            return redirect()->route('registersede')->withSuccess('Error de registro')
            ->with('errors', $validator->errors());
		}
               
        /**creacion del usuario,estos datos son los mismos de la migracion o base de datos*/
        $sede = new Sede();
		$sede->name      = $request->name;		
        $sede->city    =$request->city;
        $sede->address    =$request->address;
		$sede->save();
        return redirect()->route('indexsedes')->withSuccess('Guardado');
        }

        public function sedeActual(Request $request,$id){
            $sedeactual=Sede::find($id);
            return view('admin.sedes',compact('sedeactual'));
        }
}
