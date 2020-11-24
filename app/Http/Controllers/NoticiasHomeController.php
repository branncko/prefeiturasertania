<?php

namespace App\Http\Controllers;

use App\Campanha;
use App\Videos;
use Illuminate\Http\Request;
use App\Categorias;
use App\Modal;
use App\Noticias;

use Illuminate\Support\Facades\Session;


class NoticiasHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $noticiasCarousel = Noticias::where('ativo', 1)->where('carousel', 1)->orderBy('id', 'desc')->take(3)->get();
        $noticiasMais = Noticias::where('ativo', 1)->whereNotIn('id',$noticiasCarousel)->orderBy('id', 'desc')->take(5)->get();
        $publicidades = Campanha::all();
        $videoscinco = Videos::take(5)->get();

        $modal = Modal::find(1);
 
        return view('site.home', compact('noticiasCarousel'), compact('noticiasMais','publicidades','videoscinco','modal'));

    }

    public function noticiasLista()
    {
         $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Notícias', 'link' => ''  , 'active' =>true ],
        ];
        $noticias = Noticias::where('ativo',1)->orderBy('id','desc')->paginate(20);
        $videoscinco = Videos::take(5)->get();

        return view('site.noticias', compact('noticias','videoscinco',"breadcrumb"));

    }
    public function noticiasBusca(Request $request)
    {
         $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Notícias', 'link' => ''  , 'active' =>true ],
        ];
        $videoscinco = Videos::take(5)->get();

        $noticias = Noticias::where('title','like','%'. $request->busca .'%' )->orderBy('id','desc')->paginate(20);

        if (count($noticias) == 0) {
            return redirect()->to(route("noticias"))->withErrors("Nenhum registro encontrado");

        }
        return view("site.noticias", compact("noticias","videoscinco","breadcrumb"));

    }

    public function leitura($id, $slug)
    {

         $noticia = Noticias::where('ativo', 1)->where('id', $id)->first();
        if ($noticia == null) return response()->redirectTo(route('home'));
        $noticia->visualizado = $noticia->visualizado + 1;
        $noticia->save();

        $noticias = Noticias::where('categoria_id', $noticia->categorias->id)->take(5)->get();

        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Notícias', 'link' => 'noticias'  , 'active' =>false ],
            ['texto' => $noticia->title, 'link' => ''  , 'active' =>true ],
        ];
        
        return view('site.noticia', compact('noticia','noticias',"breadcrumb"));
    }
}
