<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mading_rekrutmen extends Model
{	
    protected $table = 'mading_rekrutmen';//untuk menjelaskan bahwa ada table namanya siswa ke laravel
    protected $fillable = ['judul','content','batas_akhir'];

}