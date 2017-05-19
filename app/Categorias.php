<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorias extends Model
{
    use SoftDeletes;




    protected $fillable = ['name','id'];
    protected $table ='categorias';
    /**
     * Get the post that owns the categorias.
     */
    public function noticias()
    {
        return $this->belongsToMany('App\Noticias','noticia_categoria');
    }
}
