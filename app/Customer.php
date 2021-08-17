<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'phone', 'gender'
    ];
    
	public function orders()
	{
	    return $this->hasMany(Order::class);
	}

	public function size()
	{
	    return $this->hasOne(Size::class);
	}
}
