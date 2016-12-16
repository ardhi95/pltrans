<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_paket extends CI_Controller {

	public function index()
	{
		$data['sql']=$this->m_paketwisata->tampil();
		$data['contact'] = $this->db->query("SELECT * FROM contact")->result();
		//$data['query']=$this->m_paketwisata->promoOdd();
		$this->load->view('front_end/V_paket', $data);		
	}

}

/* End of file C_paket.php */
/* Location: ./application/controllers/C_paket.php */