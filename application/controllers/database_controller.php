<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('Database_test');
		$tabel_kontak=$this->Database_test->getContact();
		echo $tabel_kontak;
	}

}

/* End of file database_controller.php */
/* Location: ./application/controllers/database_controller.php */
