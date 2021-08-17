<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
        'customer_id', 'reg_no', 'delivery_date', 'order_amount', 'order_paid', 'order_details', 'order_status'
    ];

    public function customer()
	{
	    return $this->belongsTo(Customer::class);
	}

    public function order_items()
	{
	    return $this->hasMany(OrderItem::class);
	}
}
