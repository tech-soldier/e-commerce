<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tax extends Model
{

	use SoftDeletes;

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

