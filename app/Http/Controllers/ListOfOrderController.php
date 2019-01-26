<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Meja;

class ListOfOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Order::select('orders.id','orders.id_order', 'meja.noMeja', 'users.name', 'orders.status_order')
        ->join('meja', 'orders.no_meja', '=', 'meja.id')
        ->join('users', 'orders.id_user', '=', 'users.id')
        ->get();
        $meja = Meja::get();
        // dd($data);

        return view('other.corder')->with('data', $data)->with('meja', $meja);
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

    }
    public function done($id)
    {
      $q = Order::where('id', $id)->update(
        [
          'status_order' => '1'
        ]
      );
      if ($q) {
        return redirect()->back()->with('success', 'Berhasil Update');
      }
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
        $q = Order::where('id', $id)->update(
          [
            'no_meja' => $request->input('no_meja')
          ]
        );
        if ($q) {
          return redirect()->back()->with('success', 'Berhasil Update');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Order::findOrFail($id)->delete()) {
          return redirect()->back()->with('success', 'Berhasil Delete');
        }
    }
}
