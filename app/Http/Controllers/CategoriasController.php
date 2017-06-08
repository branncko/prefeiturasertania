<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Noticias;
use Illuminate\Http\Request;
use \Validator;
use \Session;

class CategoriasController extends Controller
{
    public function __construct() {
        $this->middleware('admin.user');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::orderBy('id','desc')->paginate(20);

        return view("admin.categorias-listar", compact("categorias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categorias-cad");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $regras = [
            'name' => 'required|max:144|min:5',

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


        $categoria = Categorias::create($request->all());


        Session::flash('sucesso', 'Categoria cadastrada com sucesso');

        return redirect()->to(route("categoria-lista"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $categoria = Categorias::find($id);
        if ($categoria == null) {
            return redirect(route("categoria-lista"))->withErrors("Categoria não existente");

        }

        return view("admin.categorias-ed", compact("categoria"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categorias::find($id);
        if ($categoria == null) {
            return redirect(route("categoria-lista"))->withErrors("Categoria não existente");

        }
        return view("admin.categorias-ed", compact("$categoria"));



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
        $categoria = Categorias::find($id);
        if ($categoria == null) {
            return redirect(route("categoria-lista"))->withErrors("Categoria não existente");

        }


        $regras = [
            'name' => 'required|max:144|min:5',

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


        $categoria->fill($request->all());
        $categoria->save();

        Session::flash('sucesso', 'Categoria modificada com sucesso');

        return redirect()->to(route("categoria-lista"));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categorias::find($id);

        $noticia = Noticias::where('categoria_id', $id)->get();
        if (count($noticia) != 0) {
            return redirect(route("categoria-lista"))->withErrors("Existem notícias nesta categoria. Exclua-as ou modifique a categoria");

        }

        if ($categoria == null) {
            return redirect(route("categoria-lista"))->withErrors("Categoria não existente");

        }

        $r = $categoria->delete();

        if ($r) {
            Session::flash('sucesso', 'Categoria excluída com sucesso');

            return redirect()->to(route("categoria-lista"));

        } else {
            return redirect(route("categoria-lista"))->withErrors("Categoria não excluída por algum motivo");


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
        $categorias = Categorias::where('name','like','%'. $request->busca .'%' )->orderBy('id','desc')->paginate(20);

        if (count($categorias) == 0) {
            return redirect()->to(route("categoria-lista"))->withErrors("Nenhum registro encontrado");

        }

        return view("admin.categorias-listar", compact("categorias"));

    }
}
