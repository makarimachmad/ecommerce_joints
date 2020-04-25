<?php

namespace App\Http\Controllers;

use App\Beranda;
use Illuminate\Http\Request;

class BerandasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Beranda::all();
        //dump($semua);
        return view('beranda',['data' => $data]);
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
     * @param  \App\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function show(Beranda $beranda)
    {
        //
        
        //return $beranda;
        return view('selengkapnya',['isi'=>$beranda]);
        //$bantu = (int)$id;
        //$isi = Beranda::where('id',$id)->get();
        //return view('selengkapnya',['isi'=>$isi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beranda $beranda
     * @return \Illuminate\Http\Response
     */
    public function edit(Beranda $beranda)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beranda $beranda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beranda $beranda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beranda $beranda)
    {
        //
    }
}
