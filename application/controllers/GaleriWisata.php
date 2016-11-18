<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriWisata extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	// public function index(){
	// 	$data['sql'] = $this->m_galeriwisata->view();
	// 	$this->load->view('galeriWisata/list', $data);
	// }

	public function insert($id){
		//echo $id;
		$data['sql']=$this->m_galeriwisata->viewById($id);
		$this->load->view('back_end/galeriWisata/insert',$data);
	}

	public function prosesInsert(){
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size']	= '2048'; //in kb 
		//$config['max_width']  = '2048';
		//$config['max_height']  = '2048';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('photo')){ //name="upload"
			//echo $this->upload->display_errors();
			?>
				<script type="text/javascript">
					alert('Gagal');
				</script>
			<?php
		}
		else {
			//if upload success
			$id_info = $this->input->post('id_info');
			$gbr = $this->upload->data();
			$object = array(
					//'id_galeri' => $this->input->post('id_galeri'),
					'nama_galeri_wisata' => $gbr['file_name'],
					'id_info' => $id_info
				);
			$this->m_galeriwisata->insert($object);
			redirect('info/viewAllimage/'.$id_info,'refresh');
		}
	}

	public function del($id){
		$this->m_galeriwisata->delete($id);
		echo "<script> window.history.back(); </script>";
	}
}

/* End of file GaleriWisata.php */
/* Location: ./application/controllers/GaleriWisata.php */