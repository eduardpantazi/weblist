<?php

class Websites extends CI_Model {

	// DB Structure
	// title
	// description
	// keywords
	// url
	// category
	//*logo
	// 	active
	// 	date_added
	// 	date_modified
	// user


	function countAll($active = null) {
		if($active) {
			return $this->db->where('active', true)->count_all_results('websites');
		} else {
			return $this->db->count_all('websites');
		}
	}

	function getAll($active = null) {
		if ($active) {
			$get = $this->db->where('active', true)->get('websites');
		} else {
			$get = $this->db->get('websites');
		}

		if ($get->num_rows() !== 0) {
			return $get->result;
		}
	}

	function add() {
		$search = $this->db->where('url', parse_url($this->input->post('url'), PHP_URL_HOST))->get('websites');

		if ($search->num_rows() == 0) {

			$data = array(
				"title" => $this->input->post('title'),
				"description" => $this->input->post('description'),
				"keywords" => $this->input->post('keywords'),
				"url" => $this->input->post('url'),
				"category" => $this->input->post('category'),
				"active" => false,
				"date_added" => date('Y-m-d H:i:s'),
				"date_modified" => date('Y-m-d H:i:s'),
				"user" => $_SESSION['my_email']
			);

			$this->db->insert('websites', $data);

		} else {
			//afiseaza mesaj/notificare ca exista deja inregistrarat siteul...
		}

	}

	function edit() {

	}
}