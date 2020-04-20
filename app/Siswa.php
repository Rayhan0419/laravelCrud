<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_lengkap','tempat_lahir','nisn','jenis_kelamin','umur','agama','alamat'];
}
