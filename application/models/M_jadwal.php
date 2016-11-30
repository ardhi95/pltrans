<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {

	public function events(){
		$sql = $this->db->query("SELECT * FROM events");
		return $sql->result();
	}

	public function InsertEvent($object){
		$this->db->insert('events', $object);
	}

	public function editEvent($id, $object){
		$this->db->where('id', $id);
		$this->db->update('events', $object);
	}

	public function updateEvent($id_s, $object){
		$this->db->where('id', $id_s);
		$this->db->update('events', $object);
	}

	public function deleteEvent($id){
		$this->db->where('id', $id);
		$this->db->delete('events');
	}

}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */