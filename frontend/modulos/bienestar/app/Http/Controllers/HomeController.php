<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function admin()
    {
        return view('admin.admin');
    }
    public function user()
    {
        return view('usuarios.bienbenidoU');
    }
    public  function instructor()
    {
        return view('profesor.instructor');
    }
    public  function  actividades()
    {
        return view('usuarios.actividades');
    }
    public  function  registro()
    {
        return view('usuarios.registro');
    }
    public  function  actividadesi()
    {
        return view('profesor.actividadesAdmin');
    }
    public  function  clasesi()
    {
        return view('profesor.clasesAdmin');
    }
}
