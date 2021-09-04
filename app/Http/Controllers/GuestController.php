<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Alert;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'title' => 'Beranda'
        ]);
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
        $this->validate($request, [
            'name' => 'required',
        ]);

        $CHECK_DB = guest::where('name', '=', $request->name)->get();
        if (!$CHECK_DB->isEmpty()) {
            Alert::error('Gagal','Nama sudah ada');
            return redirect('/');
        }

        $guest = new Guest;
        $guest->name = $request->name;

        if ($guest->save()) {
            Alert::success('Berhasil','Nama berhasil ditambahkan');
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gudestroyest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $CHECK_DB = guest::where('id', '=', $id)->get();
        if ($CHECK_DB->isEmpty()) {
            Alert::error('Gagal','Nama tidak terdaftar');
            return redirect('/guest');
        }


        if (guest::where('id', '=', $id)->delete()) {
            Alert::success('Berhasil','Tamu berhasil dihapus');
            return redirect('/guest');
        }
    }
}
