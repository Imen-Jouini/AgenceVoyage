<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	   protected $guarded=[];
	public function Local()
	{
   return $his->belongsTo('App\Local');
    }
}
