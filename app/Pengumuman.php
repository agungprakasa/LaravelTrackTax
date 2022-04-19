<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{	
    protected $table = 'mading_pengumuman';//untuk menjelaskan bahwa ada table namanya siswa ke laravel
    protected $fillable = ['pengumuman','publish','judul','files'];

    public function getAvatar()
    {
    	if(!$this->avatar){
    		return asset('images/default.jpg');
    	}
    	return asset('images/'.$this->avatar);
    }
}