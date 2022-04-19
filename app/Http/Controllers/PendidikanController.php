<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_pendaftaran;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
    
    public function index(request $request)
    {
        $output=$request->session()->get('email');
        $User_pendaftarans = DB::table('User_pendaftaran')->where('email',$output)->get();
        // $User_pendaftarans = User_pendaftaran::all();
        return view('data_pelamar.pendidikan',['User_pendaftarans' => $User_pendaftarans]);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'jenjang' => 'required',
            'sekolah' => 'required',
            'jurusan' => 'required',
            'kota' => 'required',
            'tanggal_lulus' => 'required',
            'nilai_uan_ipk' => 'required',
            'akreditasi' => 'required',            

        ]);

        $data = [
            'jenjang' => $request->jenjang,
            'sekolah' => $request->sekolah,
            'jurusan' => $request->jurusan,
            'kota' => $request->kota,
            'tanggal_lulus' => $request->tanggal_lulus,
            'nilai_uan_ipk' => $request->nilai_uan_ipk,
            'akreditasi' => $request->akreditasi
        ];
 
        // di bawah ini proses update tabel kendaraan, jika kolom id sama dengan $id yang dikirim dari form
        $output=$request->session()->get('email');
        $update = DB::table('User_pendaftaran')->where('email',$output)->update($data);
        return redirect('/pendidikan')->with('sukses','Data telah tersimpan'); //menuju ke routes web ,route /siswa
    }

    public function dokumen(request $request)
    {
        $output=$request->session()->get('email');
        $User_pendaftarans = DB::table('User_pendaftaran')->where('email',$output)->get();
        // $User_pendaftarans = User_pendaftaran::all();
        return view('data_pelamar.uploadDokumen',['User_pendaftarans' => $User_pendaftarans]);
    }

    public function upload(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'foto_ktp' => 'required|mimes:pdf',
            'ijasah' => 'required|mimes:pdf',
            'transkrip_nilai' => 'required|mimes:pdf',           

        ]);
        $file1 = $request->file('foto_ktp');
        $file2 = $request->file('ijasah');
        $file3 = $request->file('transkrip_nilai');
        $filename1 = $file1->getClientOriginalName();
        $filename2 = $file2->getClientOriginalName();
        $filename3 = $file3->getClientOriginalName();
        $data = [
            'foto_ktp' => $filename1,
            'ijasah' => $filename2,
            'transkrip_nilai' => $filename3
        ];
 
        // di bawah ini proses update tabel kendaraan, jika kolom id sama dengan $id yang dikirim dari form
        $output=$request->session()->get('email');
        $update = DB::table('User_pendaftaran')->where('email',$output)->update($data);
        if($request->hasfile('foto_ktp')){
            // $User_pendaftaran->avatar = 'asdas';//$request->file('avatar')->getClientOriginalName();
            $file1->move('images/foto_ktp',$filename1);
        }
        if($request->hasfile('ijasah')){
            // $User_pendaftaran->avatar = 'asdas';//$request->file('avatar')->getClientOriginalName();
            $file2->move('images/ijasah',$filename2);
        }
        if($request->hasfile('transkrip_nilai')){
            // $User_pendaftaran->avatar = 'asdas';//$request->file('avatar')->getClientOriginalName();
            $file3->move('images/transkrip_nilai',$filename3);
        }
        return redirect('/pendidikan/dokumen')->with('sukses','Data telah tersimpan'); //menuju ke routes web ,route /siswa
    }


}
