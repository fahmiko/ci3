<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataLogin extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	
	public function cek_login($data){
		$query = $this->db->get_where('user', array(
			'username' => $data['username'],
			'password' => $data['password'])
		);
		
		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function get_data($data){
		$query = $this->db->get_where('user', array(
			'username' => $data['username'],
			'password' => $data['password'])
		);

		return $query->row_array();
	}

}

/* End of file DataLogin.php */
/* Location: ./application/models/DataLogin.php */

?>