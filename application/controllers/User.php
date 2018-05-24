<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_user');
	}

	public function index(){
		$this->load->view('user/home');
	}

	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/home');
		} else {
			if($this->data_user->check_login() == 0){
				$this->session->set_flashdata('login_false','Gagal Login');
				$this->load->view('user/home');
			}else{
				redirect('blogger','refresh');
			}
		}
	}

	public function register(){
		$this->form_validation->set_rules(
			'username', 'Username','trim|required|min_length[5]|max_length[12]|is_unique[users.username]',
        	array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        	)
		);
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('zip_code', 'Zip Code', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/home');
		} else {
			$this->data_user->add_user();
			$this->session->set_flashdata('register','Registration Succesfull Please Login');
			redirect('user','refresh');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('user','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>