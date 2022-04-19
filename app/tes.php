<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tes extends Model
{
    protected $connection = 'mysql2';
    // protected $fillable = ['kode','nama','semester'];

    // public function siswa()
    // {
    // 	return $this->belongsToMany(Siswa::class)->withPivot(['nilai']);
    // }

}
