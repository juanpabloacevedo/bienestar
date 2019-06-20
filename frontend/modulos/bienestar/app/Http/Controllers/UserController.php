<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\TipoDocumento;
use App\User;
use App\Rol;
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
		/*credenciales minimas de registro */
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
		/**rol por defecto estudiante id 3 */
		$user->id_rol    =3;
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

	
	public function registeradmin(Request $request){
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
		/**si esta logueado como administrador, puede */
		$user->id_rol     =$request->id_rol;
		$user->id_doc     =$request->id_doc;
		$user->save();
		return redirect()->route('indexuser');
		
	}


	public function create_login(){
		if(Auth::user()){
			if (Auth::user()->id_rol==1) {
				return redirect()->route('admin',['title'=>'ADMINISTRADOR']);
			}else{
				return redirect()->route('user',['title'=>'USUARIO']);
			}
		}
		return view('usuarios.login');
	}


	public function login(Request $request){

		$rules = [
			'email'     => 'required',
			'password'  => 'required'
		];

		$credentials = $request->only('email', 'password');
		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) {
			return view('usuarios.login',['errors'=>'mandatory_fields']); 
		}
		$user = User::where('email',$request->email)->first();
		if ($user!=null) {  
			if (Auth::attempt($credentials)) {
				if ($user->id_rol==1) {
					return redirect()->route('admin',['title'=>'ADMINISTRADOR']);
				}elseif($user->id_rol==2){
                    return redirect()->route('instructor',['title'=>'INSTRUCTOR']);
				}else{
                    return redirect()->route('user',['title'=>'USUARIO']);
                }
			}else{
				return view('usuarios.login',['errors'=>'incorrect']); 
			}

		}else{
			return view('usuarios.login',['errors'=>'incorrect']); 
		}

	}

	/**funcion de tipo get que me reg¿dirige al formulario de registro */
	public function create_register(Request $request){
		if(Auth::user()){
			if (Auth::user()->id_rol==1) {
				return redirect()->route('admin',['title'=>'ADMINISTRADOR']);
			}else if (Auth::user()->id_rol==2){
                return redirect()->route('instructor',['title'=>'INSTRUCTOR']);

			}else{
                return redirect()->route('user',['title'=>'USUARIO']);
            }
		}
		$errors=Session::get('errors');
		$tipo_documentos = TipoDocumento::all();
		return view('auth.register')
		->with('tipo_documentos',$tipo_documentos)
		->with('errors', $errors);
	}


	public function create_registeradmin(Request $request){
		$errors=Session::get('errors');
		$tipo_documentos = TipoDocumento::all();
		$roles = Rol::all();
		return view('admin.register')
		->with('tipo_documentos',$tipo_documentos)
		->with('roles',$roles)
		->with('errors', $errors);
	}


	public function logout(){
		return view('index');
	}


	public function index(){
		$errors=Session::get('errors');
		$users=User::where('id_rol','!=',1)->paginate(15);
		return view('admin.usuarios')
		->with('users',$users)
		->with('errors', $errors);;
	}


	public function desactive(Request $request){
		$user =User::find($request->iduser);
		$user->activo=false;
		$user->save();
		return redirect()->route('indexuser');

	}


	function changeStatus(Request $request){
		$user = User::find($request->user_id);
		$user->activo = !$user->activo;
		$user->save();
		return response()->json($user);
	}
}