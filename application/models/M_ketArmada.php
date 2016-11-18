<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ketArmada extends CI_Model {

	public function doInsert($object){
		$this->db->insert('ket_armada', $object);
	}	

}

/* End of file M_ketArmada.php */
/* Location: ./application/models/M_ketArmada.php */