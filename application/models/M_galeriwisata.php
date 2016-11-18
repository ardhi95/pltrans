<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeriwisata extends CI_Model {
		
	public function viewById($id){
		$this->db->where('id_info', $id);
		return $this->db->get('info_wisata')->result();
	}

	public function view(){
		return $this->db->get('galeri_wisata')->result();
	}

	public function insert($object){
		$this->db->insert('galeri_wisata', $object);
	}

	public function edit($id){
		$this->db->where('id_galeri_wisata', $id);
		return $this->db->get('galeri_wisata')->result();
	}

	public function changeData($id, $object){
		$this->db->where('id_galeri_wisata', $id);
		$this->db->update('galeri_wisata', $object);
	}

	public function delete($id){
		$this->db->where('id_galeri_wisata', $id);
		$this->db->delete('galeri_wisata');
	}

	public function AllImage($id_info){
		$hasil = $this->db->query("SELECT * FROM galeri_wisata WHERE id_info ='".$id_info."' ");
		return $hasil->result();
	}

	public function AllImageWisata($id_info){
		$this->db->where('id_info', $id_info);
		return $this->db->get('info_wisata')->result();
	}
}

/* End of file M_galeriwisata.php */
/* Location: ./application/models/M_galeriwisata.php */