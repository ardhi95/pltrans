<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketWisata extends CI_Controller {
		public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login','refresh');
		}
	}

	public function index(){
		$data['query']=$this->m_paketwisata->tampil();
		$this->load->view('back_end/paketWisata/list', $data);
	}

	public function insert(){
		$this->load->view('back_end/paketWisata/insert');
	}

	public function insertData(){
		$object = array(
				'id_paket' => $this->input->post('id_paket'),
				'nama_paket' => $this->input->post('nama_paket'),
				'deskripsi' => $this->input->post('deskripsi'),
				'harga' => $this->input->post('harga')
			);
		$data['query']=$this->m_paketwisata->insert($object);
		redirect('PaketWisata','refresh');
	}

	public function edit($id){
		//echo $id;
		$data['query']=$this->m_paketwisata->edit($id);
		$this->load->view('back_end/paketWisata/edit',$data);
	}

	public function editData($id){
		$object = array(
				'id_paket' => $id,
				'nama_paket' => $this->input->post('nama_paket'),
				'deskripsi' => $this->input->post('deskripsi'),
				'harga' => $this->input->post('harga')
			);
		$data['query']=$this->m_paketwisata->changeData($object,$id);
		redirect('PaketWisata','refresh');
	}

	public function del($id){
		//echo $id;
		$this->m_paketwisata->delete($id);
		redirect('PaketWisata','refresh');
	}

}

/* End of file PaketWisata.php */
/* Location: ./application/controllers/PaketWisata.php */