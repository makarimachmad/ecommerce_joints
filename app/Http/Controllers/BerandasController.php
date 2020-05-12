<?php

namespace App\Http\Controllers;

use App\Beranda;
use App\Event\PencarianEvent;
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
        //return view('beranda',['data' => $data]);
        return view('cobaberanda');
        
        //$data = Beranda::all();
        // return response([
        //     'success' => true,
        //     'message' => 'mantap jiwa berhasil ambil data db',
        //     'data' => $data
        // ],200);

        // return response()->json([
        //     'pakaian' => Beranda::latest()->get()
        // ], Response::HTTP_OK);
    }
    public function get(){
        //return view('beranda',['data' => $data]);
        
        //API
        // $data = Beranda::orderBy('id','DESC')->pagination(2);
        $data = Beranda::all();
        return response([
            'success' => true,
            'message' => 'mantap jiwa berhasil ambil data db',
            'data' => $data
        ],200);
    }
    public function getpagging(){
        //return view('beranda',['data' => $data]);
        
        //API
        // $data = Beranda::orderBy('id','DESC')->pagination(2);
        $data = Beranda::orderBy('id','DESC')->pagination(3);
        return response([
            'success' => true,
            'message' => 'mantap jiwa berhasil ambil data db',
            'data' => $data
        ],200);
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
        
        //return view('selengkapnya',['isi'=>$beranda]);
        return response([
            'success' => true,
            'message' => 'selengkapnya mantap jiwa',
            'data' => $beranda
        ],200);
        
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

    public function cari(Reuest $request)
    {
        $query = $request->query('query');
        $data = Beranda::where('nama','LIKE','%'.$query.'%')
            ->orWhere('kategori','LIKE','%'.$query.'%')
            ->get();

        event(new PencarianEvent($data));
        
        return response([
            'success' => true,
            'message' => 'mantap jiwa berhasil ambil data db',
            'data' => $data
        ],200);
    }


}
