<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}

	// Tampilan...

	public function about(){
		$data['about'] = $this->db->query("SELECT * FROM about");
		$this->load->view('back_end/set_cont/V_about', $data);
	}

	public function homeSlider(){
		$data['slider'] = $this->db->query("SELECT * FROM slider")->result();
		$this->load->view('back_end/set_cont/V_homeSlide', $data);
	}

	public function contact(){
		$data['contact'] = $this->db->query("SELECT * FROM contact")->result();
		$this->load->view('back_end/set_cont/V_contact', $data);
	}

	// Proses Insert...

	public function doAbout(){
		$data = array('content'=>$this->input->post('about'));
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
		$data = array(
						'office' =>	$this->input->post('office'),
						'mobile' => $this->input->post('mobile'),
						'email'  =>	$this->input->post('email'),
						'fax' 	 =>	$this->input->post('fax')
					);

		$this->m_settings->Contact($data);
		redirect('setting/contact','refresh');
	}

	// edit...

	public function editAbout($id){
		$this->load->view('');
	}

	public function editSlider($id){
		$this->load->view('');
	}

	public function editContact($id){
		$this->load->view('');
	}

	// Proses edit...

	public function DoEditAbout($id){
		$data['about'] = $this->input->post("about");
		$this->m_settings->editAbout($data, $id);
		redirect('setting/about','refresh');
	}

	public function DoEditHomeSlide($id){
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

			$this->m_settings->EditHomeSlide($object);
			redirect('setting/homeSlider','refresh');
		}
	}

	public function DoEditContact($id){
		$data = array(
						'office' =>	$this->input->post('office'),
						'mobile' => $this->input->post('mobile'),
						'email'  =>	$this->input->post('email'),
						'fax' 	 =>	$this->input->post('fax')
					);

		$this->m_settings->editContact($data, $id);
		redirect('setting/contact','refresh');
	}

	// Delete...

	public function deleteAbout($id){
		$this->db->where('id_about', $id);
		$this->db->delete('about');

		redirect('setting/about','refresh');
	}

	public function deleteSlider($id){
		$this->db->where('id_slider', $id);
		$this->db->delete('slider');

		redirect('setting/homeSlider','refresh');
	}

	public function deleteContact($id){
		$this->db->where('id_contact', $id);
		$this->db->delete('contact');

		redirect('setting/contact','refresh');
	}

}

/* End of file Set_contact.php */
/* Location: ./application/controllers/Set_contact.php */