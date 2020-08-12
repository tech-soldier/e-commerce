<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Watch extends Model
{
    use SoftDeletes;

	protected $fillable = [
		'watch_id',
		'SKU',
        'watch_name',
        'in_stock',
        'quantity',
        'price',
        'cost',
        'material',
        'main_color',
        'movement',
        'gender',
        'category_id',
        'diameter',
        'strap_width',
        'strap_length',
        'weight',
        'water_resistant',
        'cover_img',
        'short_description',
        'long_description'
	];

    /**
     * Define relationship between two tables
     * @return Relationship Eloquent relationship
    */
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    /**
     * Define relationship between two tables
     * @return Relationship Eloquent relationship
    */
    public function orders()
    {
    	return $this->belongsToMany(Order::class);
    }

}
