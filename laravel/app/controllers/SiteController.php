<?php

class SiteController extends BaseController {
	public function indexAction(){
		if (Auth::check())
        {
            return Redirect::to('user/main'); 
        }else {
            return View::make('index');
        }
	}
}
