<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diamond extends Model
{
	protected $fillable = [
	'id', 'price', 'stock', 'certificate', 'shape', 'weight', 'color', 'clarity', 'cut', 'polish', 'symmetry', 'fluroscence', 'lab', 'location', 'imageLink'
	];
   	 public static $filters = [
    	'id', 'price', 'stock', 'certificate', 'shape', 'weight', 'color', 'clarity', 'cut', 'polish', 'symmetry', 'fluroscence', 'lab', 'location', 'imageLink'
    			];


    	public function items()
    	{
    		return $this->belongsTo(Item::class);
    	}

    	public static function form()
    	{
    		return [
    		'id' => '' , 
    		'price' => 0 , 
    		'stock' => '' , 
    		'certificate' => 0, 
    		'shape' => '', 
    		'weight' => 0, 
    		'color' => '', 
    		'clarity' => '', 
    		'cut' => '', 
    		'polish' => '', 
    		'symmetry' => '', 
    		'fluroscence' => '', 
    		'lab' => '', 
    		'location' => '', 
    		'imageLink'
    		];
    	}
}
