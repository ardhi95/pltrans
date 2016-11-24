<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function index()
	{
		$data['sql'] = $this->m_jadwal->events();
		$this->load->view('back_end/jadwal/V_calendar', $data);
	}

}

/* End of file Calendar.php */
/* Location: ./application/controllers/Calendar.php */