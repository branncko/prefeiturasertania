<?php

namespace App\Http\Controllers;

use App\Modal;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function modalHome() {
        
        $modal = Modal::find(1);

        return view('admin.modal-home', compact('modal'));
    }


    public function modalHomeSave(Request $request, $id) {

        $modal = Modal::find($id);
        
        $modal->fill($request->all());


        if ($request->has("liberado")) {$modal->liberado = true;}else{$modal->liberado=false;}
            

        $modal->save();

        return redirect(route("modal-home"));
        
    }
}
