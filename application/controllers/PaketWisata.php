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
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('foto')){ //name="upload"
			
			?>
				<script type="text/javascript">
					alert("<?php echo $this->upload->display_errors(); ?>");
				</script>
			<?php
			echo "<script> window.history.back(); </script>";
		}
		else {

			//if upload success
			$gbr = $this->upload->data();

			$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config['size'] = '1024';
			$config['maintain_ratio'] = FALSE;
			$config['width'] = 640;
			$config['height'] = 426;

			$this->load->library('image_lib', $config);

			if ( ! $this->image_lib->resize()){
				$this->session->set_flashdata('message', $this->image_lib->display_errors('', ''));
			}
		$object = array(
				'id_paket' => $this->input->post('id_paket'),
				'nama_paket' => $this->input->post('nama_paket'),
				'deskripsi' => $this->input->post('deskripsi'),
				'harga' => $this->input->post('harga'),
				'foto'	=> $gbr['file_name']
			);

		$data['query']=$this->m_paketwisata->insert($object);
		redirect('PaketWisata','refresh');
			}
	}

	public function edit($id){
		//echo $id;
		$data['query']=$this->m_paketwisata->edit($id);
		$this->load->view('back_end/paketWisata/edit',$data);
	}

	public function editData($id){
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('foto')){ //name="upload"
			
			$object = array(
				'id_paket' => $id,
				'nama_paket' => $this->input->post('nama_paket'),
				'deskripsi' => $this->input->post('deskripsi'),
				'harga' => $this->input->post('harga'),
				'foto'	=> $gbr['file_name']
			);

		$data['query']=$this->m_paketwisata->changeData($object,$id);
		redirect('PaketWisata','refresh');
		}
		else {

			//if upload success
			$gbr = $this->upload->data();

			$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config['size'] = '1024';
			$config['maintain_ratio'] = FALSE;
			$config['width'] = 640;
			$config['height'] = 426;

			$this->load->library('image_lib', $config);

			if ( ! $this->image_lib->resize()){
				$this->session->set_flashdata('message', $this->image_lib->display_errors('', ''));
			}
		$object = array(
				'id_paket' => $id,
				'nama_paket' => $this->input->post('nama_paket'),
				'deskripsi' => $this->input->post('deskripsi'),
				'harga' => $this->input->post('harga'),
				'foto'	=> $gbr['file_name']
			);

		$data['query']=$this->m_paketwisata->changeData($object,$id);
		redirect('PaketWisata','refresh');
		}
	}

	public function del($id){
		//echo $id;
		$this->m_paketwisata->delete($id);
		redirect('PaketWisata','refresh');
	}

}

/* End of file PaketWisata.php */
/* Location: ./application/controllers/PaketWisata.php */