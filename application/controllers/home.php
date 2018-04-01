<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Contact');
		$data = $this->Contact->get_contact();
		$this->load->view('kontak', $data, FALSE);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>