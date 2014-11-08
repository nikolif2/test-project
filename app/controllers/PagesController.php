<?php

class PagesController extends BaseController {
	
	//Functions are needed in page controllers to let the routes know
	//how and where to find the pages and return values (var)
	
	public function home()
 	{
		$name = 'Pujdo';
		
		return View::make('hello')->with('name', $name);
	}	
	/*
	public function about() 
	{
		$name = 'Cofi';
		return View::make('about')->with('name', $name);
	}
	public function me()
	{
		$number = 15;
		return View::make('me')->with('number', $number) ;
	}
	*/
		
}

?>