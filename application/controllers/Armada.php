<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Armada extends CI_Controller {
	public function __construct(){ 
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login','refresh');
		}
	}

	public function index(){
		$data['query'] = $this->m_armada->tampil();
		$this->load->view('back_end/armada/list', $data);
	}

	public function insert()
	{
		$this->load->view('back_end/armada/insertArmada');
	}

	public function insertKet(){
		//enum disini		
		$data['sql'] = $this->m_armada->get_enum_values('ket_armada','jam');
		$this->load->view('back_end/armada/insert',$data);
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
		if (!$this->upload->do_upload('upload')){ //name="upload"
			echo $this->upload->display_errors();
		}
		else {
			//if upload success
			$gbr = $this->upload->data();
			$object = array(
					'id_armada' => $this->input->post('id_armada'),
					'nama_armada' => $this->input->post('nama_armada'),
					'foto' => $gbr['file_name'],
					'deskripsi' => $this->input->post('deskripsi')
				);
			$this->m_armada->insert($object);
			redirect('armada','refresh');
		}
	}

	public function edit($id){
		//echo $id;
		$data['query']=$this->m_armada->edit($id);
		$this->load->view('armada/edit',$data);
	}

	public function editData(){
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '2048';
		$config['max_height']  = '2048';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('foto')){ //name="foto"
			$id = $this->input->post('id_armada');
			$object = array(
					'id_armada' => $id,
					'nama_armada' => $this->input->post('nama_armada'),
					'deskripsi' => $this->input->post('deskripsi')
				);

			$this->m_armada->changeData($id,$object);
			redirect('armada','refresh');
		}
		else {
			//if upload success
			$id = $this->input->post('id_armada');
			$gbr = $this->upload->data();
			$object = array(
					'id_armada' => $id,
					'nama_armada' => $this->input->post('nama_armada'),
					'foto' => $gbr['file_name'],
					'deskripsi' => $this->input->post('deskripsi')
				);

			$this->m_armada->changeData($id,$object);
			redirect('armada','refresh');
	}
}	

	public function del($id){
		//echo $id;
		$this->m_armada->delete($id);
		redirect('armada','refresh');
	}

}

/* End of file Armada.php */
/* Location: ./application/controllers/Armada.php */