<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id',      
        'watch_id',                                                           
        'user_id',                                                            
        'first_name',                                                            
        'email_address',                                                        
        'billing_address',                                                        
        'shipping_address',                                                       
        'subtotal',                                             
        'tax_id',                                                              
        'total'    
    ];


    public function customer()
    {
    	return $this->belongsTo(Customer::class); 
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
