<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('back_end/V_home');		
	}

}

/* End of file C_admin.php */
/* Location: ./application/controllers/C_admin.php */