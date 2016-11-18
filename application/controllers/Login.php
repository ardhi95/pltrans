<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('back_end/login/form');
	}

	public function processLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$login = $this->m_login->login($username,$password);

		if ($login->num_rows() == 1) {
			foreach ($login->result() as $sess) {
				$sess_data['logged_in'] = 'LogIn';
				$sess_data['id_login'] = $sess->id_login;
				$sess_data['username'] = $sess->username;
				$sess_data['session_time'] = time();
			}

			$this->session->set_userdata($sess_data);
			redirect('armada','refresh');
		}
		else{
			redirect(site_url('login'),'refresh');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */