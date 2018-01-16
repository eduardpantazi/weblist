<?php

class Website extends Web_Controller {

	function index() {
		$this->view('my_websites');
	}

	function list() {
		$this->view('public_websites');
	}

	function add() {
		$this->view('add_website');
	}

	function edit($id) {
		$this->view('edit_website');
	}

	
}