<?php

class TicketsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$handler = new handler("../files/","20150622;89.txt");
		//$handler->getContent("../files/20150306-1.txt");
		//$handler->getFileDetails($fileLines);
		//echo $handler->getName();
		var_dump($handler);
	}

}
