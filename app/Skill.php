<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    public function roles() {
    	return $this->belongsToMany('App\Role');
    }

    public function trainings() {
    	return $this->hasMany('App\Training');
    }

    public function wing() {
    	return $this->hasOne('App\Wing');
    }
}
