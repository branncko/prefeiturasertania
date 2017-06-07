<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orgaos extends Model
{
    use SoftDeletes;

    protected $table = 'orgaos';
    protected $fillable = ['titulo','sobre'];


    protected $dates = ['deleted_at','created_at','updated_at'];
}
