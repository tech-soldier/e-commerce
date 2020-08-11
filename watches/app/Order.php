<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'user_id',
        'full_name',
        'email',
        'billing_address',
        'shipping_address',
        'subtotal',
        'transaction_status',
        'GST',
        'PST',
        'HST',
        'shipping',
        'total',
    ];

    /**
     * Define relationship between two tables
     * @return Relationship Eloquent relationship
    */
    public function user()
    {

    	return $this->belongsTo(User::class);
    }

    // public function transaction()
    // {
    // 	return $this->hasMany(Transaction::class);
    // }

    /**
     * Define relationship between two tables
     * @return Relationship Eloquent relationship
    */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * Define relationship between two tables
     * @return Relationship Eloquent relationship
    */
    public function watches()
    {
    	return $this->belongsToMany(Watch::class);
    }


    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }

}
