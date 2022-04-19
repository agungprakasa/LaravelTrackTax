<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SiteController extends Controller
{
    public function index(Request $request)
    {
    
        return view('sites.home');
    }

    public function register()
    {
    	return view('sites.register');
    }

    public function userbaru(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
            'KTP' => 'required|max:17',
            'username' => 'required',
            'nama_lengkap' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

   
        //insert ke table user
    	$user = new \App\User;
        $user->role = '3';
        $user->name = $request->nama_lengkap;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table user_pendaftaran
        $request->request->add(['user_id' => $user->id]);
        $user_pendaftaran = \App\user_pendaftaran::create($request->all());
        $name=$request->username;
        $password = $request->password;
        $email=$request->email;

        $data = array(
            'name'=>"$name", 
            'password' => "$password");
        Mail::send('gmailview', $data, function($message) use ($email){
            $message->to($email,'smada')
            ->subject('Pos User Activation');
            $message->from('agungprakasa49@gmail.com',' PT.POS INDONESIA');
 
        });
 
        if($request->hasfile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $user_pendaftaran->avatar = $request->file('avatar')->getClientOriginalName();
            $user_pendaftaran->save();
        }//get data id
    	return redirect('/register')->with('sukses','Data telah tersimpan'); //menuju ke routes web ,route /register
    }

}
