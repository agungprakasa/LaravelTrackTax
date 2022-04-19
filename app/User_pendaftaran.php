<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_pendaftaran extends Model
{	
    protected $table = 'User_pendaftaran';//untuk menjelaskan bahwa ada table namanya siswa ke laravel
    protected $fillable = ['KTP','nama_lengkap','tempat_lahir','tanggal_lahir','email','username','password','avatar','user_id','jenis_kelamin','status_nikah','kewarganegaraan','agama','provinsi','kota_kabupaten','kecamatan','kelurahan','handphone','alamat_ktp','npwp','jenjang','sekolah','jurusan','kota','tangal_lulus','nilai_uan_ipk','akreditasi','foto_ktp','ijasah','transkrip_nilai'];

    public function getAvatar()
    {
    	if(!$this->avatar){
    		return asset('images/default.jpg');
    	}
    	return asset('images/'.$this->avatar);
    }

    // public function mading_rekrutmen()
    // {
    // 	return $this->belongsToMany(mading_rekrutmen::class)->withPivot(['status']);
    // }

    public function Rekrutmen()
    {
        return $this->belongsTo(Rekrutmen::class)->withPivot(['status']);;
    }
}
