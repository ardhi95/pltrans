<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_settings extends CI_Model {

	public function about($data){
		$this->db->query("INSERT INTO settings (about) VALUES('".$data['about']."')");
	}

	public function homeSlide($object){
		$this->db->query("INSERT INTO settings (image) VALUES ('".$object['image']."')");
	}	

	public function Contact($data){
		$this->db->query("INSERT INTO settings (office,mobile,fax,email) VALUES ('".$data['office']."', '".$data['mobile']."', '".$data['fax']."', '".$data['email']."')");
	}	

}

/* End of file M_settings.php */
/* Location: ./application/models/M_settings.php */