<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    //
    protected $table = 'kelurahan';

    public function pasiens() {
    	return $this->hasMany('App\Pasien');
    }
}
