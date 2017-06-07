<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campanha extends Model
{
     use SoftDeletes;

    protected $table = 'campanhas';
    protected $fillable = ['titulo','imagem','link'];


    protected $dates = ['deleted_at','created_at','updated_at'];
}
