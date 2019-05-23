<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
	public function show() 
{
    \Alert::message('this is a test message', 'info');
    return view('test');
}
}
