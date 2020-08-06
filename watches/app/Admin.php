<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{

	use SoftDeletes; 

	protected $fillable = [
		'admin_id', 
		'admin_email', 
		'password'
	]; 
    
}
