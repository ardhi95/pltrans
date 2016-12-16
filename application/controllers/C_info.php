<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_info extends CI_Controller {

	public function index()
	{
		//echo print_r($this->m_info->hitung()->result());
		$data['sql']=$this->m_info->newPost()->result();
		$data['query']=$this->m_info->lastPost()->result();
		$data['contact'] = $this->db->query("SELECT * FROM contact")->result();
		$this->load->view('front_end/V_info',$data);		
	}

	public function readmore()
	{
		$this->load->view('front_end/V_detailsInfo');
	}
}

/* End of file C_info.php */
/* Location: ./application/controllers/C_info.php */