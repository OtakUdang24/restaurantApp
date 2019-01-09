<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';
    protected $fillable = ['id_order' ,'id_user', 'no_meja', 'keterangan', 'status_order'];
}
