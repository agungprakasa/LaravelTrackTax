<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->has('cari')){
            $data_user = \App\Users::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_user = \App\Users::all();//namespace app ,untuk mengambil semua data siswa(variable)
        }
        return view('admin.index',['data_user' => $data_user]);//dilempar ke view agar bisa digunakan
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',            

        ]);
        //insert ke table user
    	$user = new \App\Users;
        $user->role = '1';
        $user->name = $request->name;
        $user->username = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('$request->password');
        $user->remember_token = str_random(60);
        $user->save();

    	return redirect('/admin/menu/create')->with('sukses','Data telah tersimpan'); //menuju ke routes web ,route /siswa
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
        $User= \App\Users::find($id);
        $User->delete($request->all());//get data id
        return redirect('/CekUser')->with('sukses','Data telah dihapus'); //menuju ke routes web ,route /siswa
    }

    public function profile($id)
    {
        $siswa= \App\siswa::find($id);
        return view('siswa.profile',['siswa' => $siswa]);
    }

    public function menucreate()
    {
        return view('admin.menu_create');
    }

}
