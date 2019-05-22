<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class CSVController extends Controller
{
	public function importCSV(Request $request){
		$file=$request->file('filecsv');
		$path=$file->getRealpath();
		$lines=file($path);
		$utf8_lines=array_map('utf8_encode',$lines);
		$array=array_map('str_getcsv',$utf8_lines);
		//dd($array[1][0]);
		$n=[];
		for ($i=0; $i < sizeof($array); $i++) { 
			$comma_separated = explode(";", $array[$i][0]);
			array_push($n, $comma_separated);
		}
		for ($i=1; $i < sizeof($n); $i++) { 
			$objuser=new User();
			$objuser->name=$n[$i][3];
			$objuser->apellido=$n[$i][4];
			$objuser->codigo=$n[$i][2];
			$objuser->celular='000001';
			$objuser->usuario=$n[$i][1];;
			$objuser->email=$n[$i][5];
			$objuser->numero_documento=$n[$i][1];
			$objuser->id_rol='3';
			$objuser->id_doc='1';
			$objuser->password=bcrypt($n[$i][2]);
			$objuser->activo=true;
			$objuser->timestamps=false;
			$objuser->save();
		}
		return redirect()->route('indexuser');
	}
}
