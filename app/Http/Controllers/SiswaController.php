<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->has('cari')){
            $data_siswa = \App\siswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_siswa = \App\siswa::all();//namespace app ,untuk mengambil semua data siswa(variable)
        }
        return view('siswa.index',['data_siswa' => $data_siswa]);//dilempar ke view agar bisa digunakan
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required|email|unique:users',
            'jenis_kelamin' => 'required',
            'agama' => 'required',  
            'avatar' => 'mimes:jpeg,png',             

        ]);
        //insert ke table user
    	$user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\siswa::create($request->all());
        if($request->hasfile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }//get data id
    	return redirect('/siswa')->with('sukses','Data telah tersimpan'); //menuju ke routes web ,route /siswa
    }

    public function edit($id)
    {
    	$siswa= \App\siswa::find($id);//get data id
    	return view ('siswa/edit',['siswa' => $siswa]); //menuju ke routes web ,route /siswa
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
        $siswa= \App\siswa::find($id);
        $siswa->update($request->all());
        if($request->hasfile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }//get data id
        return redirect('/siswa')->with('sukses','Data telah diupdate'); //menuju ke routes web ,route /siswa
    }

    public function delete(Request $request,$id)
    {
        $siswa= \App\siswa::find($id);
        $siswa->delete($request->all());//get data id
        return redirect('/siswa')->with('sukses','Data telah dihapus'); //menuju ke routes web ,route /siswa
    }

    public function profile($id)
    {
        $siswa= \App\siswa::find($id);
        return view('siswa.profile',['siswa' => $siswa]);
    }
}
