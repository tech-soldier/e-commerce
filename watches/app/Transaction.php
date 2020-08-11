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
		'transaction',
        'transaction_status',
        'response_code',
        'auth_code'
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
