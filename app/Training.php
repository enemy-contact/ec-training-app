<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    //
    public function skills() {
    	return $this->belongsToMany('App\Skill');
    }

    public function members() {
    	return $this->belongsToMany('App\Member');
    }

    public function wing() {
    	return $this->hasOne('App\Wing');
    }
}
