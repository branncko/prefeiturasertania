<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.user');
    }


    public function index()
    {
        return view('admin.home');
    }
    public function listar()
    {
        return "Lista de Adm";
    }
    public function listarInativos()
    {
        return "Lista de Adm inativos";
    }
}
