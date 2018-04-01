<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_test extends CI_Model {

        public function getContact(){
	$this->load->database();
        $query = $this->db->query('SELECT * FROM contact');
        $tabel_kontak="
                <table border='1'>
                <tr>
                        <td>Firstname</td>
                        <td>Lastname</td>
                        <td>Address</td>
                        <td>Age</td>
                </tr>
        ";
        foreach ($query->result() as $row) {
        $tabel_kontak+="
                <tr>
                <td>".$row->firstname."</td>
                        <td>".$row->lastname."</td>
                        <td>".$row->address."</td>
                        <td>".$row->age."
                </tr>
        ";
        }
        $tabel_kontak+= "</table>";
        $tabel_kontak+= 'Total Result: '.$query->num_rows();
        return $tabel_kontak;
        }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>