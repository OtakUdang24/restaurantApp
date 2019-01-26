<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = ['id_order' ,'id_user', 'no_meja', 'status_order'];
}
