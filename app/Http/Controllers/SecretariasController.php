<?php

namespace App\Http\Controllers;

use App\Secretarias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class SecretariasController extends Controller
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
        $secretarias = Secretarias::orderBy('id','desc')->paginate(20);

        return view("admin.secretarias-listar", compact("secretarias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.secretarias-cad");
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
            'titulo' => 'required|max:144|min:5',
            'sobre' => 'required|min:5',

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


        $secretaria = Secretarias::create($request->all());


        Session::flash('sucesso', 'Orgão cadastrada com sucesso');

        return redirect()->to(route("secretarias-lista"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $secretaria = Secretarias::find($id);
        if ($secretaria == null) {
            return redirect(route("secretarias-lista"))->withErrors("Orgão não existente");

        }

        return view("admin.secretarias-ed", compact("secretaria"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secretaria = Secretarias::find($id);
        if ($secretaria == null) {
            return redirect(route("secretarias-lista"))->withErrors("Orgão não existente");

        }
        return view("admin.secretarias-ed", compact("$secretaria"));



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
        $secretaria = Secretarias::find($id);
        if ($secretaria == null) {
            return redirect(route("secretarias-lista"))->withErrors("Orgão não existente");

        }


        $regras = [
            'titulo' => 'required|max:144|min:5',

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


        $secretaria->fill($request->all());
        $secretaria->save();

        Session::flash('sucesso', 'Orgão modificado com sucesso');

        return redirect()->to(route("secretarias-lista"));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secretaria = Secretarias::find($id);

        if ($secretaria == null) {
            return redirect(route("noticia-lista"))->withErrors("Notícia não existente");

        }

        $r = $secretaria->delete();

        if ($r) {
            Session::flash('sucesso', 'Orgão excluído com sucesso');

            return redirect()->to(route("secretarias-lista"));

        } else {
            return redirect(route("secretarias-lista"))->withErrors("Orgão não excluído por algum motivo");


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
        $secretarias = Secretarias::where('name','like','%'. $request->busca .'%' )->orderBy('id','desc')->paginate(20);

        if (count($secretarias) == 0) {
            return redirect()->to(route("secretarias-lista"))->withErrors("Nenhum registro encontrado");

        }

        return view("admin.secretarias-listar", compact("secretarias"));

    }
}
