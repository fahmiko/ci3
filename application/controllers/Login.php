<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->model('DataLogin');
		}

	public function index(){
			$this->load->view('Login/form_login');
		}

	public function proses_login(){
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|max_length[12]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('Login/form_login');
			} else {
				$data=array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$check = $this->DataLogin->cek_login($data);
				if($check==true){
				$data = $this->DataLogin->get_data($data);
					$session_user = array(
						'username' => $data['username'],
						'password' => $data['password']
					);
				$sesion = $this->session->set_userdata('data_user',$session_user);
				print_r($this->session->userdata('data_user'));
				
				}else{
					echo "Gagal Login";
				}
			}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>