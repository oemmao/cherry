<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

	public function index() {
//		$this->main();
		header("Location:/");
	}

	public function main() {
		$this->load->view('/board/common/header');
		$this->load->view('/board/main');
		$this->load->view('/board/common/footer');
	}

	public function write() {
		$this->load->view('/board/common/header');
		$this->load->view('/board/write');
		$this->load->view('/board/common/footer');
	}

	public function writeSave() {
		print_r($_POST);
		print_r($_FILES);

		$result = array();
		echo json_encode($result);
	}

}
