<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSVController extends Controller
{
    public function importCSV(){
    	$path=public_path('usuarios.csv');
    	$content=file_get_contents($path);	
    	$lines=file($path);


    }
}
