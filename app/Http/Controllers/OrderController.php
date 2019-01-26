<?php

namespace App\Http\Controllers;

use App\Order;
use App\Meja;
use App\DetOrder;
use App\Masakan;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Meja::where('stts', '0')->get();
        $record = Order::latest()->first();
        $menu = Masakan::where('status', '1')->get();
        $pg = "order";
        $a = $record ? (int) DetOrder::where('id_order', $record->id_order)->count() : 'data kosong';

        if ($a === "data kosong") {
          $kode = date('Y')."-0001";
          return view('other.order')->with('noMeja', $data)->with('numb', $kode)->with('menu', $menu);
        }else {
          $expNum = explode('-', $record->id_order);
          $kode = date('Y') .'-'. sprintf("%04s", $expNum[1]+1);
          return view('other.order')->with('noMeja', $data)->with('numb', $kode)->with('menu', $menu);
        }
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
        // dd($request);
        // dd("pekok");
        $menu = Masakan::where('status', '1')->get();
        $request->validate([
          'id_order' => 'required|unique:orders|max:10',
          'no_meja' => 'required',
        ]);
        $array = $request->input('id_menu');

        $insertOrder = Order::create($request->all());
        if($insertOrder){
          Meja::where('noMeja', $request->input('no_meja'))
          ->update(['stts' => '1']);
          foreach ($array as $key => $value) {

            DetOrder::insert(
              array(
                'id_order' => $request->id_order,
                'id_masakan' => $value,
                'keterangan' => 'belum ada',
                'jumlah'  => 0
               )
             );
          }
          $det = DetOrder::select('detail_order.id_order', 'makanan.nama_masakan', 'detail_order.id_masakan')->
                join('makanan', 'detail_order.id_masakan', '=', 'makanan.id')->
          where('id_order', $request->id_order)->get();
            return view('other.detOrder')->with('success', 'Berhasil')->with('kode' ,$request->id_order)->with('det', $det);
        }
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
