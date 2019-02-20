<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    public function wing() {
    	return $this->hasOne('App\Wing');
    }
}
