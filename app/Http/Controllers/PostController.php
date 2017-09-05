<?php

namespace App\Http\Controllers;
use App\Invoice;
use App\Post;
use App\Item;
use App\Diamond;
use App\Trans_meta;
use App\Trans_post;
use App\Trans_content;
use App\Trans_tag;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
    	$posts = Post::with(['trans_metas', 'trans_posts' => function($query){
    			$query->where('locale', app()->getLocale())->get();}	
    		, 'trans_contents', 'trans_tags'])
    		->get();
            $items = Item::with(['diamonds', 'settings'])->get();
    	$trans = trans('message.hello');

    	return response()
    		->json([
    		'posts' => $posts,
                        'items' => $items,
    		'trans' => $trans
    			]);
    }
}
