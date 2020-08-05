<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable = [
		'cateegory_id', 
		'category_name'
	];

	public function watch() 
	{
		return $this->hasMany(Watch::class); 
	}
    
}
