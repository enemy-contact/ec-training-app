<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function skills() {
    	return $this->hasMany('App\Skill');
    }

    public function award() {
    	return $this->hasOne('App\Award');
    }

    public function ranks() {
        return $this->belongsToMany('App\Rank');
    }

    public function wing() {
    	return $this->hasOne('App\Wing');
    }
}
