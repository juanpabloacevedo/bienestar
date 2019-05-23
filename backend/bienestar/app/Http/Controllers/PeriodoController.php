<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Periodo;

class PeriodoController extends Controller{
	public function index(){
		$periodos=Periodo::all();
		return view('admin.periodo')
		->with('periodos',$periodos);
	}
	public function create(){
		return view('admin.periodoregister');
	}
	public function store(Request $request){
		/**datos obligatorios para el registro */
		$rules = [
			'name'    => 'required|max:255',
			'dateinit'   => 'required|max:32',
			'dateend'   => 'required|max:32'
		];
		/**credenciales minimas de registro */
		$credentials = $request->only(
			'name','dateinit','dateend'			
		);
		/**si los datos son incorrectos dirijase a registro */
		$validator = Validator::make($credentials, $rules);
		if($validator->fails()) {
			return redirect()->route('registerperiodo')
			->with('errors', $validator->errors());
		}

		/**creacion del periodo,estos datos son los mismos de la migracion o base de datos*/
		$periodo = new Periodo();
		$periodo->name   = $request->name;		
		$periodo->inicio  = $request->dateinit;
		$periodo->fin  = $request->dateinit;
		$periodo->activo  = false;
		$periodo->save();
		return redirect()->route('indexperiodo');
	}
}
