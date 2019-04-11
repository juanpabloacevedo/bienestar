<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\EspacioDeportivo;
use App\Espacio;
use App\Periodo;
use App\Clase;
use App\User;
use Session;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $espacios=Espacio::all();
        $clases=Clase::where('cupos','>=',1)->orderBy('created_at')->get();
        $users=User::all();
        return view('admin.listaclases')
        ->with('clases',$clases)
        ->with('espacios',$espacios)
        ->with('users',$users);
    }
    public function store(Request $request){
    }

    public function register(Request $request){
        /**datos obligatorios para el registro */
		$rules = [
            'name'    => 'required|max:255',
            'cupos'   => 'required|max:32'
            ];
        /**credenciales minimas de registro */
		$credentials = $request->only(
            'name','cupos'			
        );
        /**si los datos son incorrectos dirijase a registro */
		$validator = Validator::make($credentials, $rules);
		if($validator->fails()) {
            return redirect()->route('registerclase')
            ->with('errors', $validator->errors());
		}
               
        /**creacion del usuario,estos datos son los mismos de la migracion o base de datos*/
        $clase = new Clase();
        $clase->name   = $request->name;		
        $clase->cupos  = $request->cupos;
        $clase->disponible  = true;
        $clase->id_user  = 1;
        $clase->id_espacio = $request->id_espacio;
        $clase->id_periodo = $request->id_periodo;
		$clase->save();
        return redirect()->route('indexclases');
    }
    public function create_register(Request $request){
        $errors=Session::get('errors');
        $espaciosdeportivos= EspacioDeportivo::all();
        $periodos= Periodo::all();
        $users = User::where('id_rol',2)
        ->where('sancionado',false)
        ->where('activo',true)
        ->get();

        return view('admin.claseregister')
        ->with('espaciosdeportivos',$espaciosdeportivos)
        ->with('periodos',$periodos)
        ->with('errors', $errors);
    }
    //**funcion de adicion de usuarios */
     
    public function listaclases(){
        $users=User::all();
        $clases=Clase::all();
        return view('admin.listaclases',compact('clases',$clases));
    }

    public function claseactual(Request $request){
        $id=$request->id;        
        $claseactual=Clase::find($id);
        $users=User::all();
        return view('admin.claseregisterusers')
        ->with('claseactual',$claseactual)
        ->with('users',$users);
    }

    public function subscribeUser(Request $request){
        $clase = Clase::find($request->class_id);
        $clase->users()->attach($request->user_id);
        $clase->cupos = $clase->cupos-1;
        $clase->save();
        return response()->json($clase, 200);
    }

    public function borrar(Clase $clase){
        $clase->delete();
    }

}