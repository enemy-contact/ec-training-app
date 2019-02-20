<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    //
    public function roles() {
    	return $this->hasMany('App\Role');
    }

    public function wing() {
    	return $this->hasOne('App\Wing');
    }
}
