<?php

namespace App\Http\Controllers;

use App\Videos;
use Illuminate\Http\Request;
use \Validator;
use \Session;

class VideosController extends Controller
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
        $videos = Videos::orderBy('id','desc')->paginate(20);

        return view("admin.videos-listar", compact("videos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.videos-cad");
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
            'link' => 'required|min:5',

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


        $videos = Videos::create($request->all());


        Session::flash('sucesso', 'Video cadastrada com sucesso');

        return redirect()->to(route("videos-lista"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $video = Videos::find($id);
        if ($video == null) {
            return redirect(route("videos-lista"))->withErrors("Video não existente");

        }

        return view("admin.videos-ed", compact("video"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videos = Videos::find($id);
        if ($videos == null) {
            return redirect(route("videos-lista"))->withErrors("Video não existente");

        }
        return view("admin.videos-ed", compact("videos"));



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
        $videos = Videos::find($id);
        if ($videos == null) {
            return redirect(route("videos-lista"))->withErrors("Video não existente");

        }


        $regras = [
            'titulo' => 'required|max:144|min:5',
            'link' => 'required|min:5',

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


        $videos->fill($request->all());
        $videos->save();

        Session::flash('sucesso', 'Video modificado com sucesso');

        return redirect()->to(route("videos-lista"));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videos = Videos::find($id);


        if ($videos == null) {
            return redirect(route("videos-lista"))->withErrors("Video não existente");

        }

        $r = $videos->delete();

        if ($r) {
            Session::flash('sucesso', 'Video excluída com sucesso');

            return redirect()->to(route("videos-lista"));

        } else {
            return redirect(route("videos-lista"))->withErrors("Video não excluída por algum motivo");


        }
    }

}
