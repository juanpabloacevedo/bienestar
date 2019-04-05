<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\TipoDocumento;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   
    /**funcion POST de creacion de usuarios */
    public function register(Request $request){
        /**datos obligatorios para el registro */
		$rules = [
            'name'      => 'required|max:255',
            'apellido'      => 'required|max:255',
			'email'     => 'required|max:255|email|unique:users',
            'password'  => 'required|min:6|max:255',
            'numero_documento'=>'required|max:255',
            ];
        /**credenciales minimas de registro */
		$credentials = $request->only(
			'name',
			'email',
            'password',
            'apellido',
            'numero_documento'
        );
        /**si los datos son incorrectos dirijase a registro */
		$validator = Validator::make($credentials, $rules);
		if($validator->fails()) {
            return redirect()->route('register')
            ->with('errors', $validator->errors());
		}
               
        /**creacion del usuario,estos datos son los mismos de la migracion o base de datos*/
        $user = new User();
		$user->name      = $request->name;
		$user->apellido  = $request->apellido;
        $user->codigo    = $request->codigo;
        $user->celular     = $request->celular;        
        $user->usuario     = $request->usuario;
        $user->email     = $request->email;
        $user->password  = bcrypt($request->password);
        $user->foto     = $request->foto;
        $user->numero_documento = $request->numero_documento;
        /**no pedir el rol por request */
        $user->id_rol     =2;
        $user->id_doc     =$request->id_doc;
		$user->save();

		$credentials = $request->only('email', 'password');        
	
        /**Intenta 'attempt' autenticarse con las credenciales email y password */
			if (Auth::attempt($credentials)) {
                return redirect()->route('user',['title'=>'HOME'])->with('group','HOME');;
            }else{
                return view('auth.login',['errors'=>'credentials']); 
            }
    }

    public function create_login(){
        return view('auth.login');
        }

    public function login(Request $request){
		$rules = [
			'email'     => 'required',
			'password'  => 'required'
		];

		$credentials = $request->only('email', 'password');
		$validator = Validator::make($credentials, $rules);
		
		if($validator->fails()) {
			return view('auth.login',['errors'=>'mandatory_fields']); 
		}

		$user = User::where('email','=',$request->email)->first();
		if ($user!=null) {  
            if (Auth::attempt($credentials)) {
                if ($user->id_rol==1) {
                    return redirect()->route('admin',['title'=>'ADMINISTRADOR']);
                }else{
                    return redirect()->route('user',['title'=>'USUARIO']);
                }
                return redirect()->route('admin',['title'=>'ADMINISTRADOR']);
            }else{
                return view('auth.login',['errors'=>'incorrect']); 
            }
			
		}else{
			return view('auth.login',['errors'=>'incorrect']); 
		}
		
    }

    /**funcion de tipo get que me reg¿dirige al formulario de registro */
    public function create_register(Request $request){
        $errors=Session::get('errors');
        $tipo_documentos = TipoDocumento::all();
        return view('auth.register')
        ->with('tipo_documentos',$tipo_documentos)
        ->with('errors', $errors);
    }
    public function logout(){
        return view('welcome');
    }
    public function listausuarios(){
        $users=User::all();
        return view('admin.listausuarios',compact('users'));
    }
   
   
}
