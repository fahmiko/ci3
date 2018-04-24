<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function validation_article(){
	// validasi inputan yang masuk
	$config = array(
        array(
                'field'  => 'title',
                'label'  => 'Title',
                'rules'  => 'required|is_unique[personal_blog.title]',
                'errors' =>  array(
                		'required' 	=> 'Judul Kosong',
						'is_unique' => 'Judul sudah ada !'		
                	)
        ),
        array(
                'field'  => 'artikel',
                'label'  => 'Artikel',
                'rules'  => 'required|min_length[5]',
                'errors' => array(
                		'required'   => 'Artikel Kosong',
						'min_length' => 'Isi artikel kurang dari 5 karakter'
                	)
        ),
        array(
                'field' => 'author',
                'label' => 'Author',
                'rules' => 'required',
                'errors' => array(
                		'required' => 'Author Masih Kosong'
                	)
        )
	);
	return $config;
	// $this->form_validation->set_rules('title', 'Title', 'required|is_unique[personal_blog.title]',
	// 		array(
	// 			'required' 	=> 'Judul Kosong',
	// 			'is_unique' => 'Judul sudah ada !'
	// 		));
	// $this->form_validation->set_rules('artikel', 'Artikel', 'required|min_length[5]',
	// 		array(
	// 			'required'   => 'Artikel Kosong',
	// 			'min_length' => 'Isi artikel kurang dari 5 karakter'
	// 		));
	// $this->form_validation->set_rules('author', 'Author', 'required',
	// 		array(
	// 			'required' => 'Author masih kosong'
	// 		));
	}
function pagination_config($paging){
	$config['base_url'] = 'http://localhost/ci3/blogger/page';//url untuk pagination
	$config['total_rows'] = $paging;//total baris
	$config['per_page'] = 2;//menampilkan jumlah artikel per halaman
	$config['uri_segment'] = 3;//menghitung segmentasi url
	$config['num_links'] = 2;
    $config['full_tag_open'] = '<div><ul class="pagination">';//menyisipkan style bootstrap untuk pagination
    $config['full_tag_close'] = '</ul></div>';
    $config['prev_link'] = '&lt; Prev';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = 'Next &gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';

    return $config;
}
?>