<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
	protected $fillable = [
	'name', 'phone','email'
	];

    public function invoices()
    {
    	return $this->hasMany(Invoice::class);
    }
}
