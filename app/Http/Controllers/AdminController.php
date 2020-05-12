<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$data = Admin::all();
        // return response([
            //     'success' => true,
            //     'message' => 'List semua data',
            //     'data' => $data
            // ],200);
        return view('cobaberanda');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return 'halaman admin ya';
        return view('admin_create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $file = $request->file('gambar');
        $filename = "https://jcloth.herokuapp.com/img/".str_replace(' ','_', $file->getClientOriginalName());
        $tujuan = public_path('images/menu');
        $file->move($tujuan, $filename);
        
        //$validator = $request->validate([
            $validator = Validator::make($request->all(),[
                'kategori'  => 'required',
                'nama'      => 'required',
            'deskripsi' => 'required',
            //'gambar'  => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'harga'     => 'required',
        ],
        [
            'kategori.required' => 'Masukkan kategori',
            'nama.required' => 'masukkan nama',
            'deskripsi.required' => 'masukkan deskripsi',
            //'gambar.required' => 'masukkan gambar',
                'harga.required' => 'masukkan harga',
                ]
            );
            
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'silahkan isi kolom yang kosong',
                'data' => $validator->errors()
            ],400);
        }else{
            // $post = Admin::create([
                //     'kategori' => $request->kategori,
                //     'nama' => $request->nama,
            //     'deskripsi' => $request->deskripsi,
            //     'gambar' => $filename,
            //     'harga' => $request->harga
            // ]);
            $post = Admin::create([
                'kategori' => $request->input('kategori'),
                'nama' => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),
                'gambar' => $filename,
                'harga' => $request->input('harga')
                ]);
                
                if($post){
                    return response()->json([
                        'success' => true,
                        'message' => 'mantab jiwa berhasil upload',
                    ], 200);
                }else{
                    return response()->json([
                        'success' => false,
                        'message' => 'gagal masuk db gan',
                    ], 400);
                }
            }
            
            //return redirect('/admin')->with('status','Data berhasil ditambahkan');
        }
        
        /**
         * Display the specified resource.
         *
         * @param  \App\Admin  $admin
         * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return Admin::find($admin);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin_edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        
        $file = $request->file('gambar');
        $filename = str_replace(' ','_', $file->getClientOriginalName());
        $tujuan = public_path('images/menu');
        $file->move($tujuan, $filename);
        
        
        //$validator = $request->validate([
            $validator = Validator::make($request->all(),[
                'kategori' => 'required',
                'nama' => 'required',
                'deskripsi' => 'required',
                //'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
                'harga' => 'required',
            ],
            [
                'kategori.required' => 'Masukkan kategori',
                'nama.required' => 'masukkan nama',
                'deskripsi.required' => 'masukkan deskripsi',
                //'gambar.required' => 'masukkan gambar',
                'harga.required' => 'masukkan harga',
                ]
            );
            
            if($validator->fails()){
                return response()->json([
                    'success' => false,
                    'message' => 'silahkan isi kolom yang kosong',
                    'data' => $validator->errors()
                ],400);
            }else{
                // $post = Admin::create([
                    //     'kategori' => $request->kategori,
                    //     'nama' => $request->nama,
            //     'deskripsi' => $request->deskripsi,
            //     'gambar' => $filename,
            //     'harga' => $request->harga
            // ]);
            
            $post = Admin::where('id', $admin->id)
                ->update([
                    'kategori' => $request->kategori,
                    'nama' => $request->nama,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $filename,
                    'harga' => $request->harga
                    ]);

                    if($post){
                return response()->json([
                    'success' => true,
                    'message' => 'mantab jiwa berhasil update',
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'gagal update db gan',
                ], 400);
            }
        }
        
        //return redirect('/admin')->with('status','Data berhasil diperbarui');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        
        $hapus = Admin::destroy($admin->id);
        
        if($hapus){
            return response()->json([
                'success' => true,
                'message' => 'berhasil dihapus'
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'gagal dihapus'
            ], 500);
        }
    }
    public function uploadgdrive(Request $request){
        //dd($request->file("exampleFormControlFile1")->store("","google"));
        //var cloudinary = require('cloudinary');
        $file = $request->file('gambar');
        $filename = str_replace(' ','_', $file->getClientOriginalName());
        dd(cloudinary.v2.uploader.upload("$filename"));

    }
    public function bladegdrive(){
        return view('gdrive');
    }
    
}
