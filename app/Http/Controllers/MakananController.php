<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masakan;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $select = Masakan::get();
        return view('admin.tambahMasakan')->with('data', $select);
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
        $request->validate([
          'nama_masakan' => 'required',
          'harga' => 'required|integer'
        ]);
        $insert = Masakan::create($request->all());
        if ($insert) {
          return redirect()->back()->with('success', 'Berhasil tambah');
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
        dd($request->all());

        $request->validate([
          'nama_masakan' => 'required|max:255'
        ]);
        $a =  Masakan::find($id)->update([
          'nama_masakan' => $request->nama_masakan,
          'harga' => $request->harga,
          'status' => $request->status
        ]);
        if ($a) {
          // code...
          return redirect()->back()->with('success', 'Berhasil ubah');
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
        //
        $item = Masakan::findOrFail($id);
        $result = $item->delete();
        if ($result) {
          return redirect()->back()->with('success', 'Berhasil hapus');
        }
    }
}
