<?php

class User extends Web_Controller {

	function index() {
		if(isset($_SESSION['logged']) && isset($_SESSION['my_email'])) {
			$data['profile'] = $this->Users->getOne($_SESSION['my_email']);
			$this->view('profile_index', $data);
		} else {
			redirect('user/login');
		}
	}

	function login() {
		if(!isset($_SESSION['logged']) && !isset($_SESSION['my_email'])) {
			$this->view('login');
		} else {
			redirect('user');
		}
	}

	function logout() {
		// do the logout method
		session_destroy();
		redirect();
	}

	function register() {
		if(!isset($_SESSION['logged']) && !isset($_SESSION['my_email'])) {
			$this->view('register');
		} else {
			redirect('user');
		}
		
	}

	function edit() {
		$this->view('edit_profile');
	}

	function change_password() {
		$this->view('edit_password');
	}

	// after register user, show welcome message
	function welcome() {
		$this->view('welcome_user');
	}

	function login_process() {
		if(!$this->Users->login()) {
			echo "email sau parola gresita!";
		}
	}

	function register_process() {
		$this->Users->add();
		
		if ($this->Users->add() == false) {
			
		}
			
	}

}