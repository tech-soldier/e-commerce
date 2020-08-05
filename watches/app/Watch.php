<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{

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

    // use SoftDeletes;
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

}
