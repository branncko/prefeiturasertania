<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

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
        $noticiasCarousel = Noticias::where('ativo', 1)->where('carousel', 1)->orderBy('id', 'desc')->take(5)->get();
        $noticiasMais = Noticias::where('ativo', 1)->where('carousel', 0)->orderBy('id', 'desc')->get();
        return view('site.home', compact('noticiasCarousel'), compact('noticiasMais'));

    }

    public function noticiasLista()
    {
        $noticias = Noticias::where('ativo',1)->orderBy('id','desc')->paginate(20);
        return view('site.noticias', compact('noticias'));

    }
    public function noticiasBusca(Request $request)
    {
        $noticias = Noticias::where('title','like','%'. $request->busca .'%' )->orderBy('id','desc')->paginate(20);

        if (count($noticias) == 0) {
            return redirect()->to(route("noticias"))->withErrors("Nenhum registro encontrado");

        }

        return view("site.noticias", compact("noticias"));

    }

    public function leitura($id, $slug)
    {


        $noticia = Noticias::where('ativo', 1)->where('id', $id)->first();
        if ($noticia == null) return response()->redirectTo(route('home'));
        $noticia->visualizado = $noticia->visualizado + 1;
        $noticia->save();
//        dd($noticia->categorias->id);
        $noticias = Noticias::where('categoria_id', $noticia->categorias->id)->take(5)->get();
//        dd($noticias);
        return view('site.noticia', compact('noticia'), compact('noticias'));
    }
}
