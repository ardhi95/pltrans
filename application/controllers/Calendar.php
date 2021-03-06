<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login','refresh');
		}
	}

	public function index() {
		$data['sql'] = $this->m_jadwal->events();
		$this->load->view('back_end/jadwal/V_calendar', $data);
	}

	public function addEvent() {
		$object = array(
						'title' => $this->input->post('title'),
						'start' => $this->input->post('start'),
						'end' => $this->input->post('end'),
						'color' => $this->input->post('color'),
					);
		$this->m_jadwal->InsertEvent($object);
		redirect('calendar','refresh');
	}

	public function editEventTitle() {
		if (isset($_POST['delete']) && isset($_POST['id'])){
			
			$id = $_POST['id'];

			$this->m_jadwal->deleteEvent($id);
			redirect('calendar','refresh');
		}
		elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id'])){
			$id = $this->input->post('id');
			$object = array(
							'title'	=> $this->input->post('title'),
							'color'	=> $this->input->post('color')
						);

			$this->m_jadwal->editEvent($id, $object);
			redirect('calendar','refresh');
		}
	}

	public function editEventDate(){
		$id 	= $this->input->post('Event');
		$id_s	= $id[0];

		$start	= $this->input->post('Event');
		$starts = $start[1];;

		$end 	= $this->input->post('Event');
		$ends 	= $end[2];

		$object = array(
					'start' => $starts,
					'end'	=> $ends
				);

		$this->m_jadwal->updateEvent($id_s, $object);
		redirect('calendar','refresh');
	}

}