<?php

class Users extends CI_Model {

	function countAll() {
		return $this->db->count_all('users');
	}

	function countAllActive() {
		return $this->db->where('active', true)->count_all_results('users');
	}

	function getAll() {
		$get = $this->where('active', true)->get('users');

		if ($get->num_rows() !== 0) {
			return $get->result();
		}
	}

	// paginare... din get all

	function getOne($email) {
		$get = $this->db->where('email', $email)->get('users');

		if ($get->num_rows() !== 0) {
			return $get->row();
		}
	}


	function add() {
		$email = $this->input->post('email');

		$search = $this->db->where('email', $email)->get('users');

		if ($search->num_rows() == false) {

			$data = array(
				"email" => $this->input->post('email'),
				"password" => sha1($this->input->post('password')),
				"name" => $this->input->post('name'),
				"country" => $this->input->post('country'),
				"active" => false,
				"date_registred" => date("Y-m-d H:i:s"),
				"date_modified" => date("Y-m-d H:i:s")
			);

			$this->db->insert('users', $data);

		} else {
			return false;
		}

		
	}

	function edit() {
		// to be continued
	}


	function login() {
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$get = $this->db->where('email', $email)->get('users');

		if ($get->num_rows() !== 0) {
			$user_data  = $get->row();

			if ($password === $user_data->password) {
				$_SESSION['logged'] = md5($email . $password);
				$_SESSION['my_email'] = $email;

				//insert loggin in DB

				if ($_SERVER['HTTP_X_FORWARDED_FOR'] == null) {
					$httpx = $_SERVER['REMOTE_ADDR'];
				} else {
					$httpx = $_SERVER['HTTP_X_FORWARDED_FOR'];
				}

				$data = array(
					"ip" => $_SERVER['REMOTE_ADDR'],
					"httpx" => $httpx,
					"date" => date('Y-m-d H:i:s'),
					"email" => $email,
				);

				$this->db->insert('logins', $data);

				redirect();
				// logged in ! :D
			} else {
				return false;
			}
		}
	}


	function checkForLogin() {
		// check for SESSION
		// check for record in DB...

		// login record === 1 day
		// if SESSION is present, insert another login record in DB
		// if SESSION is NOT present, take to login page...
	}
}