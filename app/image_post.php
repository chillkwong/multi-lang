<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image_post extends Model
{
        	protected $fillable = [
		'url'
	];

        	public function post()
    	{
    		return $this->belongsTo(Post::class);
    	}
    	public static function form()
    	{
    		return [
    		'url' => ''
    		];
    	}
}
