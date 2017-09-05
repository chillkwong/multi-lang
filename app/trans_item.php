<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trans_item extends Model
{
    	protected $fillable = [
		'title', 'description', 'locale'
	];

        	public function post()
    	{
    		return $this->belongsTo(Post::class);
    	}
    	public static function form()
    	{
    		return [
    		'title' => '',
    		'description' => '',
    		'locale' => ''
    		];
    	}
}
