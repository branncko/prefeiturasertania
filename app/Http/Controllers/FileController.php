<?php

namespace App\Http\Controllers;

use App\Noticias;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Image;

class FileController extends Controller
{

    public function getFile($id) {

        $noticia = Noticias::find($id);

        $file = Storage::get($noticia->photo);


        return (new Response($file, 200))
            ->header('Content-Type', "jpg");
    }

    public function getFileCarousel($id) {

        $noticia = Noticias::find($id);

//        $file = Storage::get($noticia->photo);




       $fileretorno = Image::make(Storage::get($noticia->photo))->fit(760, 400);

//        return (new Response($fileretorno, 200))
//            ->header('Content-Type', "jpg");

        return $fileretorno->response('jpg');
    }

    public function getFileChamadinhas($id) {

        $noticia = Noticias::find($id);

        if (Storage::has($noticia->photo)) {

            $file = Storage::get($noticia->photo);


            $fileretorno = Image::make($file)->fit(100, 100);

            //        return (new Response($fileretorno, 200))
            //            ->header('Content-Type', "jpg");

            return $fileretorno->response('jpg');
        } else {
            return  Image::make("imagens/logovertical.png")->fit(100,100)->response('png');
        }
    }
}
