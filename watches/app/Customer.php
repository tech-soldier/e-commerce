<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	protected $fillable = [
		'customer_id',
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
