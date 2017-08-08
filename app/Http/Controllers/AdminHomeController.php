<?php

namespace App\Http\Controllers;

use App\AdminUser;
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
        $admins  =  AdminUser::orderBy('id','desc')->paginate(20);

        return view('admin.admin-listar', compact('admins'));
    }
    public function listarInativos()
    {
        return "Lista de Adm inativos";
    }
}
