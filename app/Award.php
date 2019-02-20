<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    //
    public function role() {
    	return $this->belongsToOne('App\Role')->withTimestamps();
    }

    public function members() {
    	return $this->belongsToMany('App\Member')->withTimestamps();
    }

    public function wing() {
    	return $this->hasOne('App\Wing');
    }
}
