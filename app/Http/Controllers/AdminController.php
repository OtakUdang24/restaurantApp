<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
    * Show the admin page.
    ** @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
      return view('admin.main');
    }

    public function registrasi()
    {
      return view('admin.registrasi');
    }

    public function order()
    {
      return view('admin.order');
    }


}
