<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarEvent extends CI_Controller {

	public function index(){
		$this->load->view('calendar/display');
	}

}

/* End of file CalendarEvent.php */
/* Location: ./application/controllers/CalendarEvent.php */