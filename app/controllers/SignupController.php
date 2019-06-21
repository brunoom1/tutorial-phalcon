<?php 

use Phalcon\Mvc\Controller;
use Phalcon\Filter;


class SignupController extends Controller {

	public function indexAction () {
		
	}

	public function registerAction () {

		if ($this->request->isPost()) {

			$filter = new Filter();

			$nome = $filter->sanitize($this->request->getPost('nome'), 'string');
			$email = $filter->sanitize($this->request->getPost('email'), 'email');

			$password_filters = [
				 'string', 'striptags', 'trim', 'lower'
			];

			$password = $filter->sanitize($this->request->getPost('password'), $password_filters);
			$repassword = $filter->sanitize($this->request->getPost('repassword'), $password_filters);

			if ($password != $repassword) {
				$this->flash->error("Senhas não conferem!");
			}

		}
	}
}