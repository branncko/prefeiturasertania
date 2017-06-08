<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campanha extends Model
{

    protected $table = 'campanhas';
    protected $fillable = ['titulo','imagem','link'];


    protected $dates = ['created_at','updated_at'];
}
