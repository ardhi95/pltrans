<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_pl extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['sql'] = $this->m_galeriPL->tampil();
		$this->load->view('galeriPL/list',$data);
	}

	public function edit($id){
		$data['sql'] = $this->m_galeriPL->edit($id);
		$this->load->view('galeriPL/edit',$data);
	}

	public function processEdit(){
		$id = $this->input->post('id');

		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '2048';
		$config['max_height']  = '2048';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('upload')){ //name="upload"
			$data = array(
					'id_galeri_pl' => $this->input->post('id')
				);

			$this->m_galeriPL->prosesEdit($id, $data);
			redirect(site_url('galeri_pl'),'refresh');
		}
		else {
			//if upload success
			$gbr = $this->upload->data();
			$data = array(
					'id_galeri_pl' => $this->input->post('id'),
					'nama_pl' => $gbr['file_name']
				);

			$this->m_galeriPL->prosesEdit($id, $data);
			redirect(site_url('galeri_pl'),'refresh');
		}
	}

	public function delete($id){
		$this->m_galeriPL->delete($id);
		redirect('galeri_pl','refresh');
	}

	public function up(){
		$this->load->view('galeriPL/form_upload');
	}

	public function processUpload(){
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '2048';
		$config['max_height']  = '2048';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('upload')){ //name="upload"
			echo $this->upload->display_errors();
		}
		else {
			//if upload success
			$gbr = $this->upload->data();
			$data = array(
					'id_galeri_pl' => $this->input->post('id'),
					'nama_pl' => $gbr['file_name']
				);

			$this->m_galeriPL->uploadPhoto($data);
			redirect(site_url('galeri_pl'),'refresh');
		}
	}

}

/* End of file Galeri_pl.php */
/* Location: ./application/controllers/Galeri_pl.php */