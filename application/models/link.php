<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Model {

	public function get_link(){
		$link = array(
			'contact_person' => 'home'
		);
		return $link;
	}
}

/* End of file link.php */
/* Location: ./application/models/link.php */
?>