<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller {

	public function index()
	{
		$this->load->model('Prsmodel');
		$data = $this->Prsmodel->getInformation();
		$this->load->view('personal', $data, FALSE);
	}

}

/* End of file personal.php */
/* Location: ./application/controllers/personal.php */