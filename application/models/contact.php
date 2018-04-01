<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model {
    public function get_contact(){
        $data = array(
        'title' => array('Tugas2' => 'VI','Tugas3'),
        'nama' => 'Fahmiko Purnama Putra',
        'alamat' => 'Malang');  
        return $data;
    }
}