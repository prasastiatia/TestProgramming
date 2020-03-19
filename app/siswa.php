<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table='data_siswa';
    protected $fillable =['nama','alamat','telpon','asal_sekolah'];
}
