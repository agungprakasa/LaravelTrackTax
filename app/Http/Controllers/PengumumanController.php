<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class PengumumanController extends Controller
{
    
    public function index(request $request)
    {
        if ($request->has('cari')){
            $pengumuman = DB::table('mading_pengumuman')->where('judul','LIKE','%'.$request->cari.'%')->get();
        }else {
            $pengumuman = DB::table('mading_pengumuman')->get();//namespace app ,untuk mengambil semua data siswa(variable)
        }
        //$pengumuman = DB::table('mading_pengumuman')->get();
        return view('mading.pengumuman',['pengumuman' => $pengumuman]);
    }

    public function profile(request $request,$id)
    {
        $pengumuman= \App\pengumuman::find($id);
        return view('mading.pengumumanhasil',['pengumuman' => $pengumuman]);
    }

    public function show($files)
    {

        $parameter = ['files' => $files];
        $nama=0;
        $select = DB::table('mading_pengumuman')->where($parameter)->get();
        foreach($select as $up){
                $nama=$up->files;  
            }
        $download= Storage_path()."/pengumuman_file/$nama";
        $header=array(
            'Content-type: application/pdf/doc/docx',
        );
        return Response::download($download,"$nama",$header);
    }

}