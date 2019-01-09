<?php

namespace App\Http\Controllers;

use App\Meja;
use Illuminate\Http\Request;

class ViewWaiterController extends Controller
{
    //
    public function index()
    {
      return view('waiter.main');
    }

    public function order()
    {
        $data = Meja::get();
        return view('waiter.order')->with('noMeja', $data);
    }
}
