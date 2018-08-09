<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    protected $fillable = ['nama'];
    protected $timestamps = false;

    public function project(){
        return $this->hasMany('App\Owner');
    }
}
