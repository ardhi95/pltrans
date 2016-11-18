<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function index()
	{
		$data['query']=$this->m_info->tampilLimit();
		$this->load->view('front_end/V_home', $data);		
	}

}

/* End of file C_home.php */
/* Location: ./application/controllers/C_home.php */