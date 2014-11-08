<?php

class PagesController extends BaseController {
	
	public function home()
 	{
		$name = 'Pujdo';
		
		return View::make('hello')->with('name', $name);
	}	
		
}

?>