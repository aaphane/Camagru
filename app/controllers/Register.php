<?php

	class Register extends Controller {

		public function __construct($controller, $action) {
			parent:: __construct($controller, $action);
			$this->load_model('users');
			$this->view->setLayout('default');
		}

		public function loginAction() {
			$this->view->render('register/login');
		}
	}