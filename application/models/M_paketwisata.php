<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paketwisata extends CI_Model {

	public function tampil(){
		return $this->db->get('paket_wisata')->result();
	}

	public function insert($object){
		$this->db->insert('paket_wisata', $object);
	}

	public function edit($id){
		$this->db->where('id_paket', $id);
		return $this->db->get('paket_wisata')->result();
	}

	public function changeData($object,$id){
		$this->db->where('id_paket', $id);
		$this->db->update('paket_wisata', $object);
	}

	public function delete($id){
		$this->db->where('id_paket', $id);
		$this->db->delete('paket_wisata');
	}	

}

/* End of file M_paketwisata.php */
/* Location: ./application/models/M_paketwisata.php */