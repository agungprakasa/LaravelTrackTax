<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{	
    protected $table = 'users';//untuk menjelaskan bahwa ada table namanya siswa ke laravel
    protected $fillable = ['role','name','email','id'];

    public function UP()
    {
        return $this->belongsToMany(User_pendaftaran::class)->withPivot(['status']);;
    }
}