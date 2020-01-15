<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
	   protected $guarded=[];
	public function Offre
	{
    return $this->belongsTo('App\Offre');
     }
}
