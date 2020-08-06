<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'cateegory_id', 
		'category_name'
	];

	public function watch() 
	{
		return $this->hasMany(Watch::class); 
	}
    
}
