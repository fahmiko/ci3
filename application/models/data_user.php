<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	
	public function check_login(){
		$object = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$this->db->where('username', $object['username']);
		$this->db->where('password', $object['password']);
		$this->db->select('id_user, username, nama, kode_pos, email');
		$this->session->set_userdata($this->db->get('users')->row_array());
		return $this->db->get('users')->num_rows();
	}

	public function add_user(){
		$object = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'kode_pos' => $this->input->post('zip_code')
		);
		return $this->db->insert('users', $object);
	}
}

/* End of file DataLogin.php */
/* Location: ./application/models/DataLogin.php */

?>