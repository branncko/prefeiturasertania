<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Videos extends Model
{
    use SoftDeletes;

    protected $table = 'videos';
    protected $fillable = ['titulo','imagem','embed','link'];


    protected $dates = ['deleted_at','created_at','updated_at'];




}
