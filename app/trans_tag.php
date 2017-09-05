<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trans_tag extends Model
{
        	protected $fillable = [
		'name', 'description', 'locale'
	];

        	public function post()
    	{
    		return $this->belongsTo(Post::class);
    	}
    	public static function form()
    	{
    		return [
    		'name' => '',
    		'description' => '',
    		'locale' => ''
    		];
    	}
}
