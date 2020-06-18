<?php

namespace App\Http\Controllers;

use App\Orgaos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class OrgaosController extends Controller
{
    public function __construct() {
        $this->middleware('admin.user')->except('home','homeOne');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgaos = Orgaos::orderBy('id','desc')->paginate(20);

        return view("admin.orgaos-listar", compact("orgaos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.orgaos-cad");
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


        $orgao = Orgaos::create($request->all());


        Session::flash('sucesso', 'Orgão cadastrada com sucesso');

        return redirect()->to(route("orgaos-lista"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $orgao = Orgaos::find($id);
        if ($orgao == null) {
            return redirect(route("orgaos-lista"))->withErrors("Orgão não existente");

        }

        return view("admin.orgaos-ed", compact("orgao"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orgao = Orgaos::find($id);
        if ($orgao == null) {
            return redirect(route("orgaos-lista"))->withErrors("Orgão não existente");

        }
        return view("admin.orgaos-ed", compact("$orgao"));



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
        $orgao = Orgaos::find($id);
        if ($orgao == null) {
            return redirect(route("orgaos-lista"))->withErrors("Orgão não existente");

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


        $orgao->fill($request->all());
        $orgao->save();

        Session::flash('sucesso', 'Orgão modificado com sucesso');

        return redirect()->to(route("orgaos-lista"));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orgao = Orgaos::find($id);

        if ($orgao == null) {
            return redirect(route("noticia-lista"))->withErrors("Notícia não existente");

        }

        $r = $orgao->delete();

        if ($r) {
            Session::flash('sucesso', 'Orgão excluído com sucesso');

            return redirect()->to(route("orgaos-lista"));

        } else {
            return redirect(route("orgaos-lista"))->withErrors("Orgão não excluído por algum motivo");


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
        $orgaos = Orgaos::where('name','like','%'. $request->busca .'%' )->orderBy('id','desc')->paginate(20);

        if (count($orgaos) == 0) {
            return redirect()->to(route("orgaos-lista"))->withErrors("Nenhum registro encontrado");

        }

        return view("admin.orgaos-listar", compact("orgaos"));

    }



    public function home() {

         
        $orgaos = Orgaos::all();

        $orgaosPrimeira = Orgaos::where('deleted_at', null)->first();
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Orgãos', 'link' => 'orgaos'  , 'active' =>false ],
            ['texto' => $orgaosPrimeira->titulo, 'link' => ''  , 'active' =>true ],
        ];
        return view('site.orgaos', compact('orgaos', 'orgaosPrimeira','breadcrumb'));
    }

    public function homeOne($id) {

        $orgaos = Orgaos::all();

        $orgaosPrimeira = Orgaos::find($id);
        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Orgãos', 'link' => 'orgaos'  , 'active' =>false ],
            ['texto' => $orgaosPrimeira->titulo, 'link' => ''  , 'active' =>true ],
        ];
        return view('site.orgaos', compact('orgaos', 'orgaosPrimeira','breadcrumb'));
    }

}
