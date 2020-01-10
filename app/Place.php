<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
	public function Local
	{
    return $this->hasMany('App\Local');
    }
}
