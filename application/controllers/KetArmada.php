<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KetArmada extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login','refresh');
		}
	}
	public function DoInsert(){
		$object = array(
					'id_ket_armada' => $this->input->post('id_ket_armada'),
					'jam' => $this->input->post('jam'),
					'ket' => $this->input->post('ket_driver'),
					'harga' => $this->input->post('harga')
				);
		$this->m_ketArmada->doInsert($object);
	}

}

/* End of file KetArmada.php */
/* Location: ./application/controllers/KetArmada.php */