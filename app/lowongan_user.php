<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lowongan_user extends Model
{	
    protected $table = 'lowongan_users';//untuk menjelaskan bahwa ada table namanya siswa ke laravel
    protected $fillable = ['id_ktp','id_lowongan','status'];

    public function User_pendaftaran()
    {
        return $this->belongsTo('App\User_pendaftaran','id_ktp','KTP');
    }

}