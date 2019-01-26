<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetOrder;

class ChangeOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*
        SELECT detail_order.id_order,orders.no_meja,menu.nama_masakan,orders.keterangan,orders.status_order FROM `detail_order`
INNER JOIN orders ON detail_order.id_order = orders.id_order
INNER JOIN menu ON detail_order.id_menu = menu.id
        */
        $data = DetOrder::select(
          'detail_order.id_order',
          'orders.no_meja',
          'menu.nama_masakan',
          'orders.keterangan',
          'orders.status_order')
          ->join('orders', 'detail_order.id_order', '=', 'orders.id_order')
          ->join('menu', 'detail_order.id_menu', '=', 'menu.id')
          ->paginate(10);
        return view('waiter.corder', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
