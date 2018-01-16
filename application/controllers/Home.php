<?php

class Home extends Web_Controller {

	function index() {
		$this->view('index');
	}

	function about() {
		$this->view('about');
	}

	function statistics() {
		$this->view('statistics');
	}
}