<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
	use SoftDeletes; 

	// temporary - will be removed later 
	protected $fillable = [
		'user_id',
		'first_name', 
		'last_name', 
		'billing_address', 
		'city', 
		'province',
		'country', 
		'postal_code',
		'email_address', 
		'phone_number', 
		'password' 
	]; 

    public function order()
    {
    	return $this->hasMany(Order::class); 
    }
}
