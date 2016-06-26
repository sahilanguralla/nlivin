<?php

namespace App\Http\Controllers;

/**
* 
*/
class QuoteController extends Controller
{
	
	public function getByTag($tag_id)
	{
		// dd($tag_id);
		$quotes = \App\Quote::whereHas('tags', function($query)  use( &$tag_id) {
			$query->where('tag_id', $tag_id);
		})->get()->shuffle()->all();
		return view('main.home', ['quotes' => $quotes]);
	}
	public function getByAuthor($author_id)
	{
		// dd($tag_id);
		$quotes = \App\Quote::whereHas('author', function($query)  use( &$author_id) {
			$query->where('id', $author_id);
		})->get()->shuffle()->all();
		return view('main.home', ['quotes' => $quotes]);
	}
}