<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "gambar";
    public $timestamps = false;
 
    protected $fillable = ['file','keterangan'];
}
