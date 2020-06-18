<?php

namespace App\Http\Controllers;

use App\Editais;
use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;


class EditaisController extends Controller
{
    
    public function __construct() {
        $this->middleware('admin.user')->except('home','homeOne','getFile');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editais = Editais::orderBy('id','desc')->paginate(20);

        return view("admin.editais-listar", compact("editais"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.editais-cad");
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
            'title' => 'required|max:144|min:15',
            'sobre' => 'required|max:255|min:50',
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

        $download = new Editais;
        if (!empty($arquivo)) {
            if ($arquivo->isValid()) {

//            $file->move($destinationPath,$file->getClientOriginalName());
                $arqui = $arquivo->store('public/arquivos');
                $download->arquivo = $arqui;

            } else {
                return redirect()->back()->withErrors(["arquivo"=>"Não é um arquivo válido"]);
            }
        }



//        $download = Editais::create($request->all());
        $download->fill($request->except(['arquivo']));
        $download->quantidade = 0;
        $download->save();

        Session::flash('sucesso', 'Download cadastrado com sucesso');

        return redirect()->to(route("editais-lista"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $edital = Editais::find($id);
        if ($edital == null) {
            return redirect(route("editais-lista"))->withErrors("Download não existente");

        }

        return view("admin.editais-ed", compact("edital"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edital = Editais::find($id);
        if ($edital == null) {
            return redirect(route("editais-lista"))->withErrors("Download não existente");

        }
        return view("admin.editais-ed", compact("edital"));



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

        $download = Editais::find($id);

        if ($download == null) {
            return redirect(route("editais-lista"))->withErrors("Notícia não existente");


        }

        $arquivo = $request->file("arquivo");

        $regras = [
            'title' => 'required|max:144|min:15',
            'sobre' => 'required|max:255|min:50',

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

        $download->fill($request->except(['arquivo']));

        if (!empty($arquivo)) {
            if ($arquivo->isValid()) {

//            $file->move($destinationPath,$file->getClientOriginalName());
                $foto = $arquivo->store('arquivo');
                $download->photo = $foto;

            } else {
                return redirect()->back()->withErrors(["arquivo"=>"Não é uma foto válida"]);
            }
        }


        $download->save();

        Session::flash('sucesso', 'Download atualizado com sucesso');

        return redirect()->to(route("editais-lista"));




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $download = Editais::find($id);

        if ($download == null) {
            return redirect(route("editais-lista"))->withErrors("Notícia não existente");

        }

        $r = $download->delete();

        if ($r) {
            Session::flash('sucesso', 'Download excluída com sucesso');

            return redirect()->to(route("editais-lista"));

        } else {
            return redirect(route("editais-lista"))->withErrors("Download não excluída por algum motivo");


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
        $editais = Editais::where('name','like','%'. $request->busca .'%' )->orderBy('id','desc')->paginate(20);

        if (count($editais) == 0) {
            return redirect()->to(route("editais-lista"))->withErrors("Nenhum registro encontrado");

        }

        return view("admin.editais-listar", compact("editais"));

    }







    public function home() {

        $editais = Editais::all();

        $editaisPrimeira = Editais::where('deleted_at', null)->first();

        $breadcrumb = [
            ['texto' => 'Home', 'link' => 'home', 'active' => false],
            ['texto' => 'Editais', 'link' => ''  , 'active' =>true ],
        ];

        return view('site.editais', compact('editais', 'editaisPrimeira','breadcrumb'));
    }

    public function getFile($id) {

        $download = Editais::find($id);

        $download->quantidade = $download->quantidade+1;
        $download->save();

        return response()->download(storage_path('app/'.$download->arquivo));
    }
}
