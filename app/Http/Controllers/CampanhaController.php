<?php

namespace App\Http\Controllers;

use App\Campanha;
use Illuminate\Http\Request;
use \Validator;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class CampanhaController extends Controller
{

    public function __construct() {
        $this->middleware('admin.user')->except('home','homeOne','getFile','mostraCampanha');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campanhas = Campanha::orderBy('id','desc')->paginate(20);

        return view("admin.campanhas-listar", compact("campanhas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.campanhas-cad");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arquivo = $request->file("arquivo");

        $regras = [
            'titulo' => 'required|max:144|min:15',

        ];
        $messages = [
            'required' => 'O campo :attribute é obrigatório.',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres.',
            'min' => 'O campo :attribute deve ter no mínimo :min caracteres.',
        ];

        $validator = Validator::make($request->all(),$regras,$messages);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        };

        $campanha = new Campanha;
        if (!empty($arquivo)) {
            if ($arquivo->isValid()) {

//            $file->move($destinationPath,$file->getClientOriginalName());
                $arqui = $arquivo->store('public/campanhas');
                $campanha->imagem = $arqui;

            } else {
                return redirect()->back()->withErrors(["arquivo"=>"Não é um arquivo válido"]);
            }
        }



//        $campanha = Campanha::create($request->all());
        $campanha->fill($request->except(['arquivo']));
        $campanha->save();

        Session::flash('sucesso', 'Campanha cadastrada com sucesso');

        return redirect()->to(route("campanha-lista"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $campanha = Campanha::find($id);
        if ($campanha == null) {
            return redirect(route("campanhas-lista"))->withErrors("Campanha não existente");

        }

        return view("admin.campanhas-ed", compact("campanha"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campanha = Campanha::find($id);
        if ($campanha == null) {
            return redirect(route("campanhas-lista"))->withErrors("Campanha não existente");

        }
        return view("admin.campanhas-ed", compact("campanha"));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campanha = Campanha::find($id);

        if ($campanha == null) {
            return redirect(route("campanhas-lista"))->withErrors("Campanha não existente");


        }

        $arquivo = $request->file("arquivo");

        $regras = [
            'titulo' => 'required|max:144|min:15',


        ];
        $messages = [
            'required' => 'O campo :attribute é obrigatório.',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres.',
            'min' => 'O campo :attribute deve ter no mínimo :min caracteres.',
        ];

        $validator = Validator::make($request->all(),$regras,$messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        };

        $campanha->fill($request->except(['arquivo']));

        if (!empty($arquivo)) {
            if ($arquivo->isValid()) {

//            $file->move($destinationPath,$file->getClientOriginalName());
                $foto = $arquivo->store('campanhas');
                $campanha->imagem = $foto;

            } else {
                return redirect()->back()->withErrors(["arquivo"=>"Não é uma foto válida"]);
            }
        }


        $campanha->save();

        Session::flash('sucesso', 'Campanha atualizada com sucesso');

        return redirect()->to(route("campanha-lista"));




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campanha = Campanha::find($id);

        if ($campanha == null) {
            return redirect(route("campanha-lista"))->withErrors("Notícia não existente");

        }

        $r = $campanha->delete();

        if ($r) {
            Session::flash('sucesso', 'Download excluída com sucesso');

            return redirect()->to(route("campanhas-lista"));

        } else {
            return redirect(route('campanha-lista'))->withErrors("Campanha não excluída por algum motivo");


        }
    }



    /**
     * Display for seach.
     *
     * @param  formParamg
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $campanhas = Campanha::where('name','like','%'. $request->busca .'%' )->orderBy('id','desc')->paginate(20);

        if (count($campanhas) == 0) {
            return redirect()->to(route("campanhas-lista"))->withErrors("Nenhum registro encontrado");

        }

        return view("admin.campanhas-listar", compact("campanhas"));

    }







    public function home() {

        $campanhas = Campanha::all();

        $campanhasPrimeira = Campanha::where('deleted_at', null)->first();

        return view('site.campanhas', compact('campanhas', 'campanhasPrimeira'));
    }

    public function homeOne($id) {

        $campanhas = Campanha::all();

        $campanhasPrimeira = Campanha::find($id);

        return view('site.campanhas', compact('campanhas', 'campanhasPrimeira'));
    }


    public function getFile($id) {

        $campanha = Campanha::find($id);

        $campanha->quantidade = $campanha->quantidade+1;
        $campanha->save();

        return response()->download(storage_path('app/'.$campanha->arquivo));
    }

    public function mostraCampanha($id) {

        $campanha = Campanha::find($id);

        $file = Storage::get($campanha->imagem);


        return (new Response($file, 200))
            ->header('Content-Type', "jpg");
    }
}
