<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id',      
        'user_id',                                                            
        'first_name',                                                            
        'email',                                                        
        'billing_address',                                                        
        'shipping_address',                                                       
        'subtotal',                                             
        'tax_id',                                                              
        'total'    
    ];


    public function user()
    {
    	return $this->belongsTo(User::class); 
    }

    public function transaction()
    {
    	return $this->hasMany(Transaction::class); 
    }

    public function watch()
    {
    	return $this->belongsToMany(Watch::class); 
    }

    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }
}
