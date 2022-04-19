<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekrutmen;
use App\lowongan_user;
use App\user_pendaftaran;
use Illuminate\Support\Facades\DB;

class RekrutmenController extends Controller
{
    public function index(request $request)
    {
        if ($request->has('cari')){
            $rekrutmen = DB::table('mading_rekrutmen')->where('judul','LIKE','%'.$request->cari.'%')->get();
        }else {
            $rekrutmen = DB::table('mading_rekrutmen')->get();//namespace app ,untuk mengambil semua data siswa(variable)
        }
        
        return view('mading.content',['rekrutmen' => $rekrutmen]);
    }

    public function rekrutmenhasil(request $request,$id)
    {
        $rekrutmen= \App\Rekrutmen::find($id);
        return view('mading.rekrutmenhasil',['rekrutmen' => $rekrutmen]);
    }

    public function daftar(request $request,$id)
    {
        $KTP=$request->session()->get('KTP');
        $cekdata= DB::select("call SP_JUMLAH_NULL ('$KTP')");
        $cek=0;
        foreach($cekdata as $ck){
                $cek=$ck->jml;
                
            }
        if($cek==0){
            return redirect('/Rekrutmen')->with('gagal','Data Belum Lengkap,Silahkan lengkapi terlebih dahulu!!!');
        }else{

            $COUNT=0;
            $parameter = ['id_lowongan' => $id, 'id_ktp' => $KTP];
            $select = DB::table('lowongan_users')->where($parameter)->get();
                foreach($select as $up){
                    $COUNT++;
                    
                }
            if($COUNT==0){
                $user_lowongan = new \App\lowongan_user;
                $user_lowongan->id_ktp = $KTP;
                $user_lowongan->id_lowongan = $id;
                $user_lowongan->status = '1';
                $user_lowongan->save();
                return redirect('/Rekrutmen')->with('sukses','Pendaftaran Berhasil');
            }else{
                return redirect('/Rekrutmen')->with('gagal','Anda Sudah Pernah Mendaftar');
            }
        }

        
    }


}
//RUMUS
//$query->where([
//     ['column_1', '=', 'value_1'],
//     ['column_2', '<>', 'value_2'],
//     [COLUMN, OPERATOR, VALUE],
//     ...
// ])