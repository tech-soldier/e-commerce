<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'category_id', 
		'category_name'
	];

    /**
     * Define relationship between two tables
     * @return Relationship Eloquent relationship
    */
	public function watch() 
	{
		return $this->hasMany(Watch::class); 
	}
    
}
