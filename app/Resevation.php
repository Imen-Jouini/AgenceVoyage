<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resevation extends Model
{
	   protected $guarded=[];
	public function Reservation
	{
     return $this->belongsTo('App\Reservation');
    }
}
