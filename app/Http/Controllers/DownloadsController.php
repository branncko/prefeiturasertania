<?php

namespace App\Http\Controllers;

use App\Downloads;
use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;


class DownloadsController extends Controller
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
        $downloads = Downloads::orderBy('id','desc')->paginate(20);

        return view("admin.downloads-listar", compact("downloads"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.downloads-cad");
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

        $download = new Downloads;
        if (!empty($arquivo)) {
            if ($arquivo->isValid()) {

//            $file->move($destinationPath,$file->getClientOriginalName());
                $arqui = $arquivo->store('public/arquivos');
                $download->arquivo = $arqui;

            } else {
                return redirect()->back()->withErrors(["arquivo"=>"Não é um arquivo válido"]);
            }
        }



//        $download = Downloads::create($request->all());
        $download->fill($request->except(['arquivo']));
        $download->quantidade = 0;
        $download->save();

        Session::flash('sucesso', 'Download cadastrado com sucesso');

        return redirect()->to(route("downloads-lista"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $download = Downloads::find($id);
        if ($download == null) {
            return redirect(route("downloads-lista"))->withErrors("Download não existente");

        }

        return view("admin.downloads-ed", compact("download"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $download = Downloads::find($id);
        if ($download == null) {
            return redirect(route("downloads-lista"))->withErrors("Download não existente");

        }
        return view("admin.downloads-ed", compact("$download"));



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

        $download = Downloads::find($id);

        if ($download == null) {
            return redirect(route("downloads-lista"))->withErrors("Notícia não existente");


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

        return redirect()->to(route("downloads-lista"));




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $download = Downloads::find($id);

        if ($download == null) {
            return redirect(route("downloads-lista"))->withErrors("Notícia não existente");

        }

        $r = $download->delete();

        if ($r) {
            Session::flash('sucesso', 'Download excluída com sucesso');

            return redirect()->to(route("downloads-lista"));

        } else {
            return redirect(route("downloads-lista"))->withErrors("Download não excluída por algum motivo");


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
        $downloads = Downloads::where('name','like','%'. $request->busca .'%' )->orderBy('id','desc')->paginate(20);

        if (count($downloads) == 0) {
            return redirect()->to(route("downloads-lista"))->withErrors("Nenhum registro encontrado");

        }

        return view("admin.downloads-listar", compact("downloads"));

    }







    public function home() {

        $downloads = Downloads::all();

        $downloadsPrimeira = Downloads::where('deleted_at', null)->first();

        return view('site.downloads', compact('downloads', 'downloadsPrimeira'));
    }

    public function homeOne($id) {

        $downloads = Downloads::all();

        $downloadsPrimeira = Downloads::find($id);

        return view('site.downloads', compact('downloads', 'downloadsPrimeira'));
    }


    public function getFile($id) {

        $download = Downloads::find($id);

        $download->quantidade = $download->quantidade+1;
        $download->save();

        return response()->download(storage_path('app/'.$download->arquivo));
    }
}
