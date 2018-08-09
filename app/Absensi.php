<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    //
    protected $fillable = ['masuk','pulang','jam_keluar','jam_kembali','keterangan','hasil_lembur','user_id'];
    protected $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
