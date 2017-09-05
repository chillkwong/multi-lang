<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trans_content extends Model
{
	protected $fillable = [
		'content', 'locale'
	];

        	public function post()
    	{
    		return $this->belongsTo(Post::class);
    	}
    	public static function form()
    	{
    		return [
    		'content' => '',
    		'locale' => ''
    		];
    	}
}
