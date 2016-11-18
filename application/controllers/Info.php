<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}
	
	public function index(){
		$data['query']=$this->m_info->tampil();
		$this->load->view('back_end/infoWisata/list', $data);
	}

	public function insert(){
		$this->load->view('back_end/infoWisata/insert');
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
					'id_info' => $this->input->post('id_info'),
					'nama_info' => $this->input->post('nama_info'),
					'blog' => $this->input->post('blog'),
					'foto' => $gbr['file_name']
				);
			$this->m_info->insert($object);
			redirect('info','refresh');
		}
	}

	public function edit($id){
		//echo $id;
		$data['query']=$this->m_info->edit($id);
		$this->load->view('back_end/infoWisata/edit',$data);
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
					'id_info' => $id,
					'nama_info' => $this->input->post('nama_info'),
					'blog' => $this->input->post('blog')
				);
			$this->m_info->changeData($id,$object);
			redirect('info','refresh');
		}
		else {
			//if upload success
			$gbr = $this->upload->data();
			$object = array(
					'id_info' => $id,
					'nama_info' => $this->input->post('nama_info'),
					'blog' => $this->input->post('blog'),
					'foto' => $gbr['file_name']
				);
			$this->m_info->changeData($id,$object);
			redirect('info','refresh');
		}
	}

	public function del($id){
		//echo $id;
		$this->m_info->delete($id);
		redirect('info','refresh');
	}

	public function viewAllimage($id_info){
		$data['sql'] = $this->m_galeriwisata->AllImage($id_info);
		$data['query'] = $this->m_galeriwisata->AllImageWisata($id_info);
		$this->load->view('back_end/infoWisata/viewALL', $data);
	}
}

/* End of file Info.php */
/* Location: ./application/controllers/Info.php */