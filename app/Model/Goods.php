<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    protected $table = "goods";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $guarded = [];
}