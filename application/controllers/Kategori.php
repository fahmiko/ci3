<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_kategori');
		$this->load->helper(array('form','url','blog'));
		$this->load->library(array('form_validation','pagination'));
	}

	public function index()
	{
		$url = $this->uri->segment(3);
		$data['kategori'] = $this->data_kategori->get_data_category_paging($url);//ambil data dari Model
		$paging = $data['kategori']['getRows'];//Ambbil jumlah baris pada tabel
		$config = pagination_config($paging,'kategori/page');//Anmbil konfigurasi pada helpers/blog_helper

		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('blogger/header');
		$this->load->view('category/category_view',$data);
		$this->load->view('blogger/footer');
	}

	public function create(){
		$this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[kategori.nama]');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|min_length[5]');

		if ($this->form_validation->run() == FALSE) {
			$data['kategori'] = $this->data_kategori->get_data_category();
			$this->load->view('blogger/header');
			$this->load->view('category/category_view',$data);
			$this->load->view('blogger/footer');		
		} else {
			$data['input'] = array(
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi')
			);
			$this->data_kategori->set_kategori(0, $data['input']);
			redirect('Kategori','refresh');
		}
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['kategori'] = $this->data_kategori->get_data_category_by_id($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|min_length[5]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('blogger/header');
			$this->load->view('category/category_edit', $data);
			$this->load->view('blogger/footer');
		} else {
			$data['input'] = array(
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi')
			);
			$this->data_kategori->set_kategori($id, $data['input']);
			redirect('Kategori','refresh');
		}

	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->data_kategori->delete_kategori($id);
		redirect('Kategori','refresh');
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */