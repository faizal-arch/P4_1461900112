<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    protected $table = "buku";
	protected $fillable = ['id','judul','tahun_terbit'];
}
