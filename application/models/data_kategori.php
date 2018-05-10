<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kategori extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_data_category_paging($offset){
		$query['select'] = $this->db->select('*')
                            ->from('kategori')
                            ->limit(2,$offset)
                            ->get();
        $rows = $this->db->get('kategori');
        $query['getRows'] = $rows->num_rows();
     	return $query;
	}
	public function get_data_category(){
		return $this->db->get('kategori');
	}

	public function get_data_category_by_id($id){
		$query = $this->db->get_where('kategori', array('id_kategori' => $id));
		return $query->row_array();
	}

	public function dropdown(){
		$data = $this->db->select('id_kategori, nama')->from('kategori')->get();
		$data_select[''] = "Pilih Kategori";
		foreach ($data->result() as $row) {
			$data_select[$row->id_kategori] = $row->nama;
		}
		return $data_select;
	}

	public function set_kategori($id = 0, $data){
		if($id == 0){
			return $this->db->insert('kategori', $data);
		}else{
			$this->db->where('id_kategori', $id);
			return $this->db->update('kategori', $data);
		}
	}

	public function delete_kategori($id){
		$this->db->where('id_kategori', $id);
		return $this->db->delete('kategori');
	}

}



/* End of file data_kategori.php */
/* Location: ./application/models/data_kategori.php */