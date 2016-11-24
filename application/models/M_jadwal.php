<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {

	public function events()
	{
		$sql = $this->db->query("SELECT * FROM events");
		return $sql->result();
	}

}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */