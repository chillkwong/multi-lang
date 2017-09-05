<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
	protected $fillable = [
	'customer_id', 'title', 'date','due_date', 'discount', 'sub_total', 'deposti', 'total'
	];
    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function items()
    {
    	return $this->hasMany(Item::class);
    }

    public static function form()
    {
    	return [
    	'customer_id' => 'select',
    	'title' => 'Invoice For',
    	'date' => date('Y-m-d'),
    	'discount' => null,
    	'sub_total' => 0,
    	'deposit' => 0,
    	'total'=> 0,
    	'items' => [Item::form()]
    	];
    }
}
