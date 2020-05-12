<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kemeja()
    {
        $Kategori = Kategori::where('kategori','kemeja')->get();
        //return view('kemeja',['data'=>$kategori]);
        return response([
            'success' => true,
            'message' => 'mantap jiwa berhasil ambil data db',
            'data' => $Kategori
        ],200);
    }
    public function bmuslim()
    {
        $Kategori = Kategori::where('kategori','bmuslim')->get(); //minuman -> kemeja
        //return view('bmuslim',['data'=>$kategori]);
        return response([
            'success' => true,
            'message' => 'mantap jiwa berhasil ambil data db',
            'data' => $Kategori
        ],200);
    }
    public function kaos()
    {
        $Kategori = Kategori::where('kategori','kaos')->get(); //minuman -> kemeja
        //return view('kaos',['data'=>$kategori]);
        return response([
            'success' => true,
            'message' => 'mantap jiwa berhasil ambil data db',
            'data' => $Kategori
        ],200);
    }
    public function jaket()
    {
        $Kategori = Kategori::where('kategori','jaket')->get(); //minuman -> kemeja
        //return view('jaket',['data'=>$kategori]);
        return response([
            'success' => true,
            'message' => 'mantap jiwa berhasil ambil data db',
            'data' => $Kategori
        ],200);
    }

    
}
