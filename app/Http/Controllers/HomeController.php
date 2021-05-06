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


    public function turismo() {
        return view('site.turismo');
    }

    public function turismoFotos() {
        return view('site.turismo-fotos');
    }

    public function cidade() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'A Cidade / História', 'link' => ''  , 'active' =>true ],
            
        ];
        return view('site.cidade', compact('breadcrumb'));
    }
    public function dados() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'A Cidade', 'link' => 'cidade'  , 'active' =>false ],
            ['texto' => 'Dados', 'link' => ''  , 'active' =>true ],
            
        ];
        return view('site.dados', compact('breadcrumb'));
    }
    public function hino() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'A Cidade', 'link' => 'cidade'  , 'active' =>false ],
            ['texto' => 'Hino', 'link' => ''  , 'active' =>true ],
            
        ];
        return view('site.hino', compact('breadcrumb'));
    }
    public function exprefeitos() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'A Cidade', 'link' => 'cidade'  , 'active' =>false ],
            ['texto' => 'Ex-Prefeitos', 'link' => ''  , 'active' =>true ],
            
        ];
        return view('site.exprefeitos', compact('breadcrumb'));
    }

    public function simbolos() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'A Cidade', 'link' => 'cidade'  , 'active' =>false ],
            ['texto' => 'Simbolos', 'link' => ''  , 'active' =>true ],
            
        ];
        return view('site.simbolos', compact('breadcrumb'));
    }

  public function prefeito() {
      $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'A Prefeitura / Prefeito', 'link' => 'prefeitura'  , 'active' =>true ],
            
            
        ];
        return view('site.prefeitura', compact('breadcrumb'));
    }

    public function viceprefeito() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'A Prefeitura', 'link' => 'prefeitura'  , 'active' =>false ],
            ['texto' => 'Vice-Prefeito', 'link' => 'viceprefeito'  , 'active' =>true ],
        ];
        return view('site.viceprefeito', compact('breadcrumb'));
    }

    public function transparencia() {
        return view('site.transparencia');
    }

    public function adirblank() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Lei Adir Blanc', 'link' => ''  , 'active' =>true ],
            
        ];
        return view('site.adirblank', compact('breadcrumb'));
    }

    public function mapaSite() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Mapa do Site', 'link' => ''  , 'active' =>true ],
        ];
        return view('site.mapa-site', compact('breadcrumb'));
    }
    public function glossario() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Glossário', 'link' => ''  , 'active' =>true ],
        ];
        return view('site.glossario', compact('breadcrumb'));
    }
    public function acessibilidade() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Acessibilidade', 'link' => ''  , 'active' =>true ],
        ];
        return view('site.acessibilidade', compact('breadcrumb'));
    }

    public function cadastroArtistico() {
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Cadastro Artístico Cultural', 'link' => ''  , 'active' =>true ],
        ];
        return view('site.cadastroartistico', compact('breadcrumb'));
    }
}
