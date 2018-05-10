<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

    public function __construct()
     {
     	$this->load->database();
          $this->load->helper('url');
     } 
	
     public function get_article($offset = 0){
     	$query['select'] = $this->db->select('*')
                            ->from('personal_blog')
                            ->join('kategori','personal_blog.id_kategori = kategori.id_kategori')
                            ->limit(2,$offset)
                            ->order_by('tanggal', 'desc')
                            ->get();
        $rows = $this->db->get('personal_blog');
        $query['getRows'] = $rows->num_rows();
     	return $query;
     }

     public function get_data_article(){
        return $this->db->get('personal_blog');
     }

     public function get_article_filter($column, $order, $search){
        $query['select'] = $this->db->select('*')
                                ->from('personal_blog')
                                ->join('kategori','personal_blog.id_kategori = kategori.id_kategori');
        if(isset($column)){
            $query['select']= $this->db->order_by($column, $order)->get();
        }else{
            $query['select']= $this->db->like('title', $search, 'both')->get();    
        }
        $rows = $this->db->get('personal_blog');
        $query['getRows'] = $rows->num_rows();
        return $query;
     }
     
     public function get_article_by_id($id){
     	$query = $this->db->get_where('personal_blog', array('id' => $id));
     	return $query->row_array();
     }

     public function set_article($id = 0, $data){
     	//Membedakan untuk query create dan update
     	if($id == 0){
     		$this->db->insert('personal_blog', $data);
     	}else{
     		$this->db->where('id',$id);
     		return $this->db->update('personal_blog', $data);
     	}
     }

     public function delete_article($id){
     	$this->db->where('id', $id);
     	return $this->db->delete('personal_blog');
     }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>