<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    //
    protected $fillable = ['deskripsi','backlog_id','tanggal_mulai','tanggal_selesai','status','hasil','kategori'];

    public function backlog(){
        return $this->belongsTo('App\Backlog');
    }
}
