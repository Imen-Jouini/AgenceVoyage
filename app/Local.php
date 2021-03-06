<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
   protected $guarded=[];
   public function Place()
   {
   	return $this->belongsTo('App\Place');
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
    



    
}
