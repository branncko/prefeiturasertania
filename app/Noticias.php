<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticias extends Model
{
    use SoftDeletes;

    protected $table = "noticias";
    protected $fillable = ['title','por','photo','legendphoto','creditophoto','visualizado','ativo','texto','sobre','categoria_id','carousel','slug'];


    protected $dates = ['deleted_at','created_at','updated_at'];

    /**
     * Get the comments for the blog post.
     */
    public function comentarios()
    {
        return $this->hasMany('App\Comentarios');
    }



    /**
     * Get the post that owns the categorias.
     */
    public function categorias()
    {
        return $this->belongsTo('App\Categorias','categoria_id');
    }
}
