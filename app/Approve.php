<?php

namespace App;



class Approve extends Model
{
   public function user()
   {
   	return $this->belongsTo(User::class);
   }
   public function artical()
   {
   	return $this->belongsTo(Artical::class);
   }
  
}
