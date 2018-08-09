<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backlog extends Model
{
    // //
    // protected $timestamps = false;
    protected $fillable = ['nama','project_id'];

    public function sprint(){
        return $this->hasMany('App\Sprint');
    }
    
    public function project(){
        return $this->belongsTo('App\Project');
    }
}
