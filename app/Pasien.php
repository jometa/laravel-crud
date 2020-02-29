<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    //
    protected $table = 'pasien';

    public function kelurahan() {
    	return $this->belongsTo('App\Kelurahan');
    }
}
