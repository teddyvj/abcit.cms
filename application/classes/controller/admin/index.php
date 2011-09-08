<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller {

	public function action_index()
	{
		$this->response->body('Admin. hello, world!');
	}

} // End Welcome
