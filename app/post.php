<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
	protected $fillable = [

	];

    public function invoice()
    {
    	return $this->belongsTo(Invoice::class);
    }

    public function trans_posts()
    {
    	return $this->hasMany(Trans_post::class);
    }

    public function trans_contents()
    {
    	return $this->hasMany(Trans_content::class);
    }

        public function trans_metas()
    {
    	return $this->hasMany(Trans_meta::class);
    }

        public function trans_tags()
    {
    	return $this->hasMany(Trans_tag::class);
    }

    public function image_posts()
    {
    	return $this->hasMany(Image_post::class);
    }

    public static function form()
    {
    	return [
    	'trans_metas' => Trans_meta::form(),
    	'trans_posts' => Trans_post::form(),
    	'trans_contents' => Trans_content::form(),
    	'trans_tags' => Trans_tag::form(),
            'image_post' => Image_post::form()
    	];
    }
}
