<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
	protected $fillable = [
	'qty', 'unit_price'
	];
    public function invoice()
    {
    	return $this->belongsTo(Invoice::class);
    }
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }

    public function diamonds()
    {
        return $this->hasMany(Diamond::class);
    }

    public function settings()
    {
        return $this->hasMany(Setting::class);
    }

    public function trans_items()
    {
        return $this->hasMany(Trans_item::class);
    }
    
    public static function form()
    {
    	return [
    	'qty' => 0,
    	'unit_price' => 0
    	];
    }
}
