<?php

class PageController extends BaseController {
	public function getIndex(){
		return View::make('main');
	}
}
