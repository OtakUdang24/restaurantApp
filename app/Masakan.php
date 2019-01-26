<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masakan extends Model
{
    //
    protected $table = 'makanan';
    protected $fillable = ['nama_masakan', 'harga', 'status'];
}
