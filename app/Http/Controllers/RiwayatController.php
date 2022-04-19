<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Rekrutmen;
use App\User_pendaftaran;
use App\lowongan_user;

class RiwayatController extends Controller
{
    
    public function index(request $request)
    {   
        //dd($request->all());
        $KTP=$request->session()->get('KTP');
        $Rekrutmen = DB::table('mading_rekrutmen')
            ->select('judul','status','keterangan')
            ->join('lowongan_users', 'mading_rekrutmen.id', '=', 'lowongan_users.id_lowongan')
            ->join('ref_status', 'lowongan_users.status','=','ref_status.id_status')
            ->where('id_ktp','=',$KTP)
            ->get();


        return view('riwayat.index', ['Rekrutmen' => $Rekrutmen]);
    }
}