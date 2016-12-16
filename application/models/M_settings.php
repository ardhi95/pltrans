<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_settings extends CI_Model {

	public function about($data){
		$this->db->where('id_about', "1");
		$this->db->update('about', $data);
	}

	public function homeSlide($object){
		$this->db->query("INSERT INTO slider (image) VALUES ('".$object['image']."')");
	}	

	public function Contact($data){
		$this->db->where('id_contact', "1");
		$this->db->update('contact', $data);
	}

	public function showContact()
	{
		return $this->db->get('contact')->result();
	}

	public function displayAbout(){
		return $this->db->query("SELECT about FROM settings");
	}

}

/* End of file M_settings.php */
/* Location: ./application/models/M_settings.php */