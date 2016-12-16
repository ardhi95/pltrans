<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_armada extends CI_Controller {

	public function index()
	{
		$data['contact'] = $this->db->query("SELECT * FROM contact")->result();
		$this->load->view('front_end/V_armada', $data);		
	}

}

/* End of file C_armada.php */
/* Location: ./application/controllers/C_armada.php */