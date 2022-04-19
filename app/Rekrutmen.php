<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekrutmen extends Model
{	
    protected $table = 'mading_rekrutmen';//untuk menjelaskan bahwa ada table namanya siswa ke laravel
    protected $fillable = ['id','judul','content'];

    public function UP()
    {
        return $this->belongsToMany(User_pendaftaran::class)->withPivot(['status']);;
    }
}