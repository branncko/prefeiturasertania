<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modal extends Model
{
    use SoftDeletes;

    protected $table = "modal";
    protected $fillable = [
        'id',
        'titulo',
        'conteudo',
        'liberado',
        'link',
        'texto_link'];
    protected $dates = ['deleted_at','created_at','updated_at'];

}
