<?php 

use Phalcon\Mvc\Controller;


class IndexController extends Controller {

	public function indexAction () {
		// return "Hello world";

		$this->view->pageTitle = "Home Page"; 

	}

}