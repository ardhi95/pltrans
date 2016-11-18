<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_armada extends CI_Model {
	public function tampil(){
		return $this->db->get('armada')->result();
	}

	public function insert($object){
		$this->db->insert('armada', $object);
	}

	public function edit($id){
		$this->db->where('id_armada', $id);
		return $this->db->get('armada')->result();
	}

	public function changeData($id,$object){
		$this->db->where('id_armada', $id);
		$this->db->update('armada', $object);
	}

	public function delete($id){
		$this->db->where('id_armada', $id);
		$this->db->delete('armada');
	}
}

/* End of file M_armada.php */
/* Location: ./application/models/M_armada.php */