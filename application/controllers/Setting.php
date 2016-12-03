<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function about(){
		$this->load->view('back_end/set_cont/V_about');
	}

	public function homeSlider(){
		$this->load->view('back_end/set_cont/V_homeSlide');
	}

	public function contact(){
		$this->load->view('back_end/set_cont/V_contact');
	}

	// Proses...

	public function doAbout(){
		$data['about'] = $this->input->post("about");
		$this->m_settings->about($data);
		redirect('setting/about','refresh');

	}

	public function doHomeSlide(){
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '2048';
		$config['max_height']  = '2048';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('image')){ //name="upload"
			echo $this->upload->display_errors();
		}
		else {
			//if upload success
			$gbr = $this->upload->data();
			$object['image'] = $gbr['file_name'];

			$this->m_settings->homeSlide($object);
			redirect('setting/homeSlider','refresh');
		}
	}

	public function doContact(){
		$data['office'] = $this->input->post('office');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['fax'] = $this->input->post('fax');

		$this->m_settings->Contact($data);
		redirect('setting/contact','refresh');
	}

}

/* End of file Set_contact.php */
/* Location: ./application/controllers/Set_contact.php */