<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table='absensi';
    protected $primaryKey = 'id_absensi';
    
    public function siswa()
    {
        return $this->belongsToMany('App\Siswa');
    }
}
