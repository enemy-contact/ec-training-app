<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wing extends Model
{
    //
    public function trainings() {
    	return $this->hasMany('App\Training');
    }

    public function skills() {
    	return $this->hasMany('App\Skill');
    }

    public function roles() {
    	return $this->hasMany('App\Role');
    }

    public function ranks() {
    	return $this->hasMany('App\Rank');
    }

    public function awards() {
        return $this->hasMany('App\Award');
    }

    public function members() {
    	return $this->hasMany('App\Member');
    }
}
