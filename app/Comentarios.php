<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentarios extends Model
{
    use SoftDeletes;


    protected $dates = ['deleted_at','created_at','updated_at'];

    /**
     * Get the post that owns the comment.
     */
    public function noticias()
    {
        return $this->belongsTo('App\Noticias');
    }

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
