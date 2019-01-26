<?php

namespace App\Http\Controllers;

use App\Meja;
use App\Order;
use Illuminate\Http\Request;

class ViewWaiterController extends Controller
{
    //
    public function index()
    {
      return view('waiter.main');
    }
}
