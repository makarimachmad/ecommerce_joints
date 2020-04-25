<?php

namespace App\Http\Controllers;

use App\Kemeja;
use Illuminate\Http\Request;

class KemejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kemeja = Kemeja::where('kategori','minuman')->get(); //kemeja
        return view('kemeja',['kemeja'=>$kemeja]);
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
     * @param  \App\Kemeja  $kemeja
     * @return \Illuminate\Http\Response
     */
    public function show(Kemeja $kemeja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kemeja  $kemeja
     * @return \Illuminate\Http\Response
     */
    public function edit(Kemeja $kemeja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kemeja  $kemeja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kemeja $kemeja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kemeja  $kemeja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kemeja $kemeja)
    {
        //
    }
}
