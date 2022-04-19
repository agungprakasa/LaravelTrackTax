<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\mading_rekrutmen;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function index(request $request)
    {
    	return view('admin.menuloker');
    }

    public function tes(request $request)
    {
        return view('admin.tes');
    }

    public function menuloker(request $request)
    {
        $loker= DB::table('mading_rekrutmen')->get();
        return view('admin.menuloker',['loker' => $loker]);
    }

    public function entriloker(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
        'judul' => 'required',
        'content' => 'required',
        'batas_akhir' => 'required',
        ]);

        $user = new \App\mading_rekrutmen;
        $user->judul = $request->judul;
        $user->content = $request->content;
        $user->batas_akhir = $request->batas_akhir;
        $user->save();

        return redirect('/menu/menuloker')->with('sukses','Data telah tersimpan');
    }

    public function menupengumuman(request $request)
    {
        $notice= DB::table('mading_pengumuman')->get();
        return view('admin.menupengumuman',['notice' => $notice]);
    }

    public function entripengumuman(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
        'judul' => 'required',
        'pengumuman' => 'required',
        'files' => 'required|mimes:pdf',
        'publish' => 'required',
        ]);

        $user = new \App\Pengumuman;
        $user->judul = $request->judul;
        $user->pengumuman = $request->pengumuman;
        $file1 = $request->file('files');
        $filename1 = $file1->getClientOriginalName();
        $user->files = $filename1;
        $user->publish = $request->publish;
        $user->save();

        return redirect('/menu/menupengumuman')->with('sukses','Data telah tersimpan');
    }

    public function updateterima(request $request,$KTP)
    {
        $flight =  DB::table('lowongan_users')
                   ->where('id_ktp',$KTP)
                   ->update(['status' => "2"]);

        // $User_pendaftarans = User_pendaftaran::all();
        return redirect ('/CekPendaftar')->with('sukses','Berkas Diterima!!'); ;
    }


}
