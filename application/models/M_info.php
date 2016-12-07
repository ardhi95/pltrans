<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_info extends CI_Model { 
	
	public function tampil(){
		$this->db->order_by('id_info', 'desc');
		return $this->db->get('info_wisata')->result();
	}

	public function insert($object){
		$this->db->insert('info_wisata', $object);
	}

	public function edit($id){
		$this->db->where('id_info', $id);
		return $this->db->get('info_wisata')->result();
	}

	public function changeData($id,$object){
		$this->db->where('id_info', $id);
		$this->db->update('info_wisata', $object);
	}

	public function delete($id){
		$this->db->where('id_info', $id);
		$this->db->delete('info_wisata');
	}			

	public function tampillimit(){
		return $this->db->query("SELECT * FROM info_wisata ORDER BY id_info DESC LIMIT 4 ")->result();
	}

	public function newPost()
	{
		return $this->db->query('SELECT * FROM info_wisata ORDER BY id_info DESC LIMIT 1 ');
	}
	public function lastPost()
	{
		return $this->db->query('SELECT * FROM info_wisata ORDER BY id_info DESC LIMIT 1,'.$this->db->get('info_wisata')->num_rows());
		//return $this->db->get('info_wisata');
	}
}

/* End of file M_info.php */
/* Location: ./application/models/M_info.php */