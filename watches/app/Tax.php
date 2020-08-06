<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{

	protected $fillable = [
		'tax_id', 
		'province', 
		'GST', 
		'PST'
	]; 

   	public function order() 
	{
		return $this->hasMany(Order::class); 
	}

}
