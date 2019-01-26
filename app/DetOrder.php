<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetOrder extends Model
{
    //
    protected $table = 'detail_order';
    protected $fillable = ['id_order' ,'id_masakan', 'keterangan', 'jumlah'];
}
