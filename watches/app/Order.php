<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
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
}
