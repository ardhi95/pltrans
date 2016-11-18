<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeriPL extends CI_Model {
	
	public function uploadPhoto($data){
		$this->db->insert('galeri_pl', $data);
	}	

	public function tampil(){
		return $this->db->get('galeri_pl')->result();
	}

	public function edit($id){
		$this->db->where('id_galeri_pl', $id);
		return $this->db->get('galeri_pl')->result();
	}

	public function prosesEdit($id, $data){
		$this->db->where('id_galeri_pl', $id);
		$this->db->update('galeri_pl', $data);
	}

	public function delete($id){
		$this->db->where('id_galeri_pl', $id);
		$this->db->delete('galeri_pl');
	}
}

/* End of file M_galeriPL.php */
/* Location: ./application/models/M_galeriPL.php */