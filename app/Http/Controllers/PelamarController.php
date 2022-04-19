<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_pendaftaran;
use App\lowongan_user;
use Illuminate\Support\Facades\DB;

class PelamarController extends Controller
{
    
    public function profile(request $request)
    {
        $output=$request->session()->get('KTP');
        $User_pendaftarans = DB::table('lowongan_users')
        ->leftjoin('User_pendaftaran', 'User_pendaftaran.KTP', '=','lowongan_users.id_ktp' )
        ->where('KTP',$output)
        ->get();
        // $User_pendaftarans = User_pendaftaran::all();
        return view('data_pelamar.biodata',['User_pendaftarans' => $User_pendaftarans]);
    }

    public function update(Request $request,$KTP)
    {
        // dd($request->all());
        $this->validate($request,[
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'status_nikah' => 'required',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'provinsi' => 'required',
            'kota_kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',  
            'handphone' => 'required',
            'alamat_ktp' => 'required',
            'npwp' => 'required',
            'avatar' => 'mimes:jpeg,png',             

        ]);
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();

        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_nikah' => $request->status_nikah,
            'kewarganegaraan' => $request->kewarganegaraan,
            'agama' => $request->agama,
            'provinsi' => $request->provinsi,
            'kota_kabupaten' => $request->kota_kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'handphone' => $request->handphone,
            'alamat_ktp' => $request->alamat_ktp,
            'npwp' => $request->npwp,
            'avatar' => $filename
        ];
 
        // di bawah ini proses update tabel kendaraan, jika kolom id sama dengan $id yang dikirim dari form
 
        $update = User_pendaftaran::where('KTP', $KTP)->update($data);

        // $User_pendaftaran= User_pendaftaran::select($KTP);
        if($request->hasfile('avatar')){
            // $User_pendaftaran->avatar = 'asdas';//$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            // $file = $request->file('avatar')->getClientOriginalName(); //Get Image Name

            // $extension = $request->file('avatar')->getClientOriginalExtension();  //Get Image Extension

            // $fileName = $file.'.'.$extension;  //Concatenate both to get FileName (eg: file.jpg)

            // $User_pendaftaran->save();
        }//get data id
        // $User_pendaftaran->update(request()->except(['_token']));
                
        
        return redirect('/pelamar')->with('sukses','Data telah tersimpan'); //menuju ke routes web ,route /siswa
    }

    public function cekpendaftar(request $request)
    {
        
        $Rekrutmen = DB::table('User_pendaftaran')
            ->select('nama_lengkap','KTP','tempat_lahir','email','avatar','jenis_kelamin','status_nikah','kewarganegaraan','agama','alamat_ktp','handphone','npwp','jenjang','sekolah','jurusan','judul','nilai_uan_ipk','akreditasi','tanggal_lahir','status','keterangan')
            ->leftjoin('lowongan_users', 'lowongan_users.id_ktp', '=', 'User_pendaftaran.KTP')
            ->leftjoin('mading_rekrutmen', 'mading_rekrutmen.id', '=', 'lowongan_users.id_lowongan')
            ->join('ref_status', 'lowongan_users.status','=','ref_status.id_status')
            ->where('status','=','1')
            ->get();
        return view('data_pelamar.cekpendaftar',['Rekrutmen' => $Rekrutmen]);
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
