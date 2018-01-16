<?php

class Web_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
		session_start();
	}

	function view($pagename, $data = null) {
		$this->load->view('static/header', $data);
		$this->load->view($pagename, $data);
		$this->load->view('static/footer', $data);
	}
}