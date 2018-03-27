<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		public function index()
	{
		echo 'Index dari controller ';
	}
	
	function test()
	{
		$this->load->model('webmodel');
		echo $this->webmodel->test();
	}
	
	function contact()
	{
		$data['pesan'] = '';
		$this->load->model('webmodel');
		if($this->input->post('kirim')){
			$data['pesan'] = $this->webmodel->proses_contact($this->input->post());
		}
		$this->load->view('contact',$data);
	}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>