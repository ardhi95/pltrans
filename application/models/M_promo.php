<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_promo extends CI_Model {

	public function tampil(){
		return $this->db->get('promo')->result();
	}

	public function insert($object){
		$this->db->insert('promo', $object);
	}

	public function edit($id){
		$this->db->where('id_promo', $id);
		return $this->db->get('promo')->result();
	}

	public function changeData($id, $object){
		$this->db->where('id_promo', $id);
		$this->db->update('promo', $object);
	}

	public function delete($id){
		$this->db->where('id_promo', $id);
		$this->db->delete('promo');
	}		

}

/* End of file M_promo.php */
/* Location: ./application/models/M_promo.php */