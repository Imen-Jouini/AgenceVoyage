<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
	public function Offre
	{
    return $this->belongsTo('App\Offre');
     }
}
