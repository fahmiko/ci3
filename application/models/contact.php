<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model {

    function test()
    {
        return 'Data untuk test model';
    }
    
    public function get_contact(){
        $nama = $array['nama'];
        $email= $array['email'];
        $telp = $array['telp'];
        $pesan= $array['pesan'];
        $data = 'Nama :'.$nama.'<br />'.
                'Email:'.$email.'<br />'.
                'Telp :'.$telp.'<br />'.
                'Pesan:'.$pesan;
        return $data;
    }
}