<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trans_meta extends Model
{
        	protected $fillable = [
		'name', 'author', 'locale', 'keywords', 'itemtype', 'publisher', 'image', 'og:title', 'article:section', 'article:tag'
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
