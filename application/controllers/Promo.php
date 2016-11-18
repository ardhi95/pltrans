<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['query']=$this->m_promo->tampil();
		$this->load->view('promo/list', $data);
	}

	public function insert(){
		$this->load->view('promo/insert');
	}

	public function insertData(){
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '2048';
		$config['max_height']  = '2048';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('foto')){ //name="upload"
			echo $this->upload->display_errors();
		}
		else {
			//if upload success
			$gbr = $this->upload->data();
			$object = array(
					'id_promo' => $this->input->post('id_promo'),
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'foto' => $gbr['file_name'],
					'link' => $this->input->post('link')
				);
			$this->m_promo->insert($object);
			redirect('promo','refresh');
		}
	}

	public function edit($id){
		//echo $id;
		$data['query']=$this->m_promo->edit($id);
		$this->load->view('promo/edit',$data);
	}

	public function editData($id){
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '2048';
		$config['max_height']  = '2048';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('foto')){ //name="upload"
			$object = array(
					'id_promo' => $id,
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'link' => $this->input->post('link')
				);
			$this->m_promo->changeData($id,$object);
			redirect('promo','refresh');
		}
		else {
			//if upload success
			$gbr = $this->upload->data();
			$object = array(
					'id_promo' => $id,
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'foto' => $gbr['file_name'],
					'link' => $this->input->post('link')
				);
			$this->m_promo->changeData($id,$object);
			redirect('promo','refresh');
		}
	}

	public function del($id){
		//echo $id;
		$this->m_promo->delete($id);
		redirect('promo','refresh');
	}

}

/* End of file Promo.php */
/* Location: ./application/controllers/Promo.php */