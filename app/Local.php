<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
   public function Place()
   {
   	return $this->hasMany('App\Place');
   }
   public function Photo()
   {
   	return $this->hasMany('App\Photo');
   }
    public function Offre()
   {
   	return $this->hasMany('App\Offre');
   }
   public function Reservation()
   {
   	return $this->hasMany('App\Offre');
   }
 public function Category()
   {
   	return $this->belongsTo('App\Category');
   }
    public function Place()
   {
   	return $this->belongsTo('App\Place');
   }



    
}
