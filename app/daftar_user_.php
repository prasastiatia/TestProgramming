<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar_user_ extends Model
{
    protected $table='users';
    protected $fillable =[
    	
    	'name',
    	'email',
    	'password',
		'level',
		'avatar',
		'telepon',
		'alamat'
    	

    ];
}
