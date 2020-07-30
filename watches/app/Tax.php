<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
   	public function orderwatch()
    {
    	return $this->hasMany(OrderWatch::class); 
    }
}
