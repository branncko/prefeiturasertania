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
//        $this->middleware('auth');
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


    public function cidade() {
        return view('site.cidade');
    }
    public function dados() {
        return view('site.dados');
    }
    public function hino() {
        return view('site.hino');
    }
    public function exprefeitos() {
        return view('site.exprefeitos');
    }

    public function simbolos() {
        return view('site.simbolos');
    }

  public function prefeito() {
        return view('site.prefeitura');
    }

    public function viceprefeito() {
        return view('site.viceprefeito');
    }

    public function transparencia() {
        return view('site.transparencia');
    }
}
