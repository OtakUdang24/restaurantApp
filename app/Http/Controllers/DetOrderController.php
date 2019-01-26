<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\DetOrder;

class DetOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd("masuk");
        $pg = "order";
        // SELECT detail_order.id_order,makanan.nama_masakan FROM `detail_order` WHERE 1
        $det = DetOrder::select('detail_order.id_order', 'makanan.nama_masakan')->
              join('makanan', 'detail_order.id_masakan', '=', 'makanan.id')->
        where('id_order', '2019-0001')->get();

        return view('other.detOrder')->with('kode', 'asd')->with('det', $det);
        // $record1 = Order::latest()->first();
        // $record = DetOrder::latest()->first();
        // $a = $record ? (int) DetOrder::where('id_order', $record1->id_order)->count() : 'data kosong';
        // $getId = $record1->id_order;
        //
        // if ($a == 1) {
        //   return redirect()->route('order.index')->with('pg', $pg);
        // }else {
        //
        //   return view('other.detOrder')->with('getId', $getId);
        // }
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
        $id_order = $request->id_order;
        $id_masakan = $request->id_masakan;
        $jumlah = $request->jumlah;
        $kete = $request->keterangan;

        $a = 0;
        $stts;
        $request->validate([
          'jumlah' => 'required',
          'keterangan' => 'required'
        ]);
        foreach ($id_masakan as $key => $value) {

          DetOrder::where('id_order', $id_order)->update(
            ['keterangan' => $kete[$a],
             'jumlah' => $jumlah[$a]
          ]
          );
          $a++;
        }
        return redirect()->route('order.index')->with('success', 'berhasil hore');
        // $insertDetOrder = DetOrder::create($request->all());
        // if ($insertDetOrder) {
        //   return redirect()->route('order.index')->with('success', 'berhasil hore');
        // }
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
