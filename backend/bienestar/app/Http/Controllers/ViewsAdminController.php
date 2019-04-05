<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsAdminController extends Controller
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
        return view('home');
    }
    public function admin()
    {
        return view('admin.admin');
    }
    public function user()
    {
        return view('admin.user');
    }
    public function listarUsuarios()
    {
        return view('admin.listausuarios');
    }
    public function listarClases()
    {
        return view('admin.clases');
    }
    public function listarEspDep()
    {
        return view('admin.espaciosdeportivos');
    }
    public function listarEspacios()
    {
        return view('admin.espacios');
    }
}
