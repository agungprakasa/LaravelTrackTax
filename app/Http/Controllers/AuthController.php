<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auths.login');
    }

    public function logout(request $request)
    {   
        if ($request->session()->has('email')){
            $request->session()->forget('email');
        }
        if ($request->session()->has('KTP')){
            $request->session()->forget('KTP');
        }
        if ($request->session()->has('nama_lengkap')){
            $request->session()->forget('nama_lengkap');
        }
        if ($request->session()->has('jenis_kelamin')){
            $request->session()->forget('jenis_kelamin');
        }
        if ($request->session()->has('kewarganegaraan')){
            $request->session()->forget('kewarganegaraan');
        }
        if ($request->session()->has('agama')){
            $request->session()->forget('agama');
        }
        if ($request->session()->has('alamat_ktp')){
            $request->session()->forget('alamat_ktp');
        }
        if ($request->session()->has('kelurahan')){
            $request->session()->forget('kelurahan');
        }
        if ($request->session()->has('kecamatan')){
            $request->session()->forget('kecamatan');
        }
        if ($request->session()->has('kota_kabupaten')){
            $request->session()->forget('kota_kabupaten');
        }
        if ($request->session()->has('provinsi')){
            $request->session()->forget('provinsi');
        }
        if ($request->session()->has('handphone')){
            $request->session()->forget('handphone');
        }
        if ($request->session()->has('avatar')){
            $request->session()->forget('avatar');
        }
        if ($request->session()->has('jenjang')){
            $request->session()->forget('jenjang');
        }
        if ($request->session()->has('foto_ktp')){
            $request->session()->forget('foto_ktp');
        }
        if ($request->session()->has('ijasah')){
            $request->session()->forget('ijasah');
        }
        if ($request->session()->has('transkrip_nilai')){
            $request->session()->forget('transkrip_nilai');
        }
    	Auth::logout();
    	return redirect ('/login');
    }

    public function postlogin(request $request)
    {   
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        'g-recaptcha-response' => 'required|captcha',
        ]);
        
        $username=$request->input('username');
    	$request->session()->put('username',$username);

        $output=$request->session()->get('username');
        $select = DB::table('User_pendaftaran')->where('username',$output)->get();
            foreach($select as $up){
                $request->session()->put('KTP',$up->KTP);
                $request->session()->put('nama_lengkap',$up->nama_lengkap);
                $request->session()->put('jenis_kelamin',$up->jenis_kelamin);
                $request->session()->put('kewarganegaraan',$up->kewarganegaraan);
                $request->session()->put('agama',$up->agama);
                $request->session()->put('alamat_ktp',$up->alamat_ktp);
                $request->session()->put('kelurahan',$up->kelurahan);
                $request->session()->put('kecamatan',$up->kecamatan);
                $request->session()->put('kota_kabupaten',$up->kota_kabupaten);
                $request->session()->put('provinsi',$up->provinsi);
                $request->session()->put('handphone',$up->handphone);
                $request->session()->put('avatar',$up->avatar);
                $request->session()->put('jenjang',$up->jenjang);
                $request->session()->put('foto_ktp',$up->foto_ktp);
                $request->session()->put('ijasah',$up->ijasah);
                $request->session()->put('transkrip_nilai',$up->transkrip_nilai);
                $request->session()->put('email',$up->email);
            }
        $KTP=$request->session()->get('KTP');

        if(Auth::attempt($request->only('username','password'))){
            return redirect ('/dashboard');
    	} 
    	return redirect('login')->with('alert','USER TIDAK ADA ATAU PASSWORD SALAH !!!!'.$KTP);
    }
}
