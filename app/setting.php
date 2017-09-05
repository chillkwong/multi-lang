<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
	protected $fillable = [
		'stock'
	];

        	public function items()
    	{
    		return $this->belongsTo(Item::class);
    	}
    	public static function form()
    	{
    		return [
    		'stock' => ''
    		];
    	}
}
