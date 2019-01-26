<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersContorller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // SELECT users.username,users.name,levels.nama_level,users.id_level FROM `users`
        // INNER JOIN levels ON users.id_level = levels.id WHERE users.id_level != 1
        $level = \App\Level::get();
        $data = User::select('users.username', 'users.id', 'users.name', 'levels.nama_level', 'users.id_level')
        ->join('levels', 'users.id_level', '=', 'levels.id')
        ->where('users.id_level', '!=', 1)
        ->get();
        return view('admin.user')->with('data', $data)->with('level', $level);
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

        $a = User::where('id', $id)->update([
          'id_level' => $request->level
         ]
        );
        if ($a) {
          // code...
          return redirect()->back()->with('success', 'Berhasil update');
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
        $a = User::findOrFail($id)->delete([
          'id' => $id
        ]);
        if ($a) {
          return redirect()->back()->with('success', 'Berhasil Delete');
        }
    }
}
