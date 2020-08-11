<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tax extends Model
{

	use SoftDeletes;

	protected $fillable = [
		'id', 
		'province', 
		'GST', 
		'PST', 
		'HST'
	]; 

	/**
     * Define relationship between two tables
     * @return Relationship Eloquent relationship
    */
   	public function order() 
	{
		return $this->hasMany(Order::class); 
	}

}

