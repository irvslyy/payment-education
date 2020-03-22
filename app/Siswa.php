<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use SoftDeletes;

    protected $table = 'siswa';
    protected $fillable = ['nama','nik','kelas','jurusan','deleted_at'];
}
