<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
	use SoftDeletes; 

	protected $fillable = [
		'transaction_id', 
		'order_id', 
		'transaction_code', 
		'transaction'
	]; 

	
    public function order()
    {
    	return $this->hasMany(Order::class); 
    }
}
