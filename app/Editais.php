<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Editais extends Model
{
    use SoftDeletes;

    protected $table = 'editais';
    protected $fillable = ['id','title','arquivo','sobre','quantidade'];


    protected $dates = ['deleted_at','created_at','updated_at'];

}
