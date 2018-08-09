<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = ['nama','owner_id'];

    public function owner(){
        return $this->belongsTo('App\Owner');
    }

    public function backlog(){
        return $this->hasMany('App\Backlog');
    }

    public function users(){
        return $this->belongsToMany('App\User','project_user');
    }
}
