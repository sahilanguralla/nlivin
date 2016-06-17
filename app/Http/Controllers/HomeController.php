<?php

namespace App\Http\Controllers;

/**
* 
*/
class HomeController extends Controller
{
	
	public function getIndex()
	{
		$quotes = \App\Quote::all()->shuffle()->all();
		return view('main.home', ['quotes' => $quotes]);
	}
}