<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Galerimodel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
    private $_table = "galeri_validasi";
	
    public $id;	
	public $image ="default.jpg";
	public $sto;
	public $odc;
	public $odp;
	public $tgl;
	public $status;
	
	public function auto_odc($title){
		$this->db->like('ODC',$title,'both');
		$this->db->order_by('ODC','ASC');
		$this->db->limit(10);

        return $this->db->get('data_odp_edited')->result();
	}
	
	public function pilihsto(){
		$this->db->select('sto');
		$this->db->distinct();
        $this->db->from('data_psb_sbs');

        return $this->db->get();
	}
	
	public function pilihbulan(){
		$this->db->select('bulan');
		$this->db->distinct();
        $this->db->from('data_psb_sbs');

        return $this->db->get();
	}
	
	public function pilihtahun(){
		$this->db->select('tahun');
		$this->db->distinct();
        $this->db->from('data_psb_sbs');

        return $this->db->get();
	}

	public function getODC(){
		$this->db->select('ODC');
		$this->db->select('STO_NAME');
		$this->db->distinct();
        $this->db->from('data_odp_edited');

        return $this->db->get();
	}

	public function getODP($odc){
		$this->db->select('*');
		$this->db->distinct();
		$this->db->where('odc',$odc);
        $this->db->from('galeri_validasi');

        return $this->db->get();
	}
	
	public function image_count(){
		$query = "	SELECT COUNT(id) as total FROM galeri_validasi";
					
		return $this->db->query($query)->result();
	}	
	
	public function badge(){
		$query = "	SELECT DISTINCT odc as nama,
					(SELECT COUNT(odc) FROM galeri_validasi WHERE odc=nama) as hasil
					FROM galeri_validasi";
					
		return $this->db->query($query)->result();
	}	
	
	public function stobadge(){
		$query = "	SELECT DISTINCT sto as nama, 
					(SELECT COUNT(sto) FROM galeri_validasi WHERE sto=nama) as hasil
					FROM galeri_validasi";
					
		return $this->db->query($query)->result();
	}
	
	public function upload_file($filename){    
		$this->load->library('upload'); // Load librari upload
		
		$config['upload_path'] = './csv/';    
		$config['allowed_types'] = 'csv';    
		$config['max_size']  = '2048';    
		$config['overwrite'] = true;    
		$config['file_name'] = $filename;      
		$this->upload->initialize($config); // Load konfigurasi uploadnya    
		
		if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil      
			// Jika berhasil :      
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
			return $return;    
		}
		else{      
			// Jika gagal :      
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
			return $return;    
		}  
	}
	
	public function insert_multiple($data){
		$this->db->insert_batch('cobafitur', $data);
	}
	
	public function save($date)
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->image = $this->_uploadImage();
        $this->sto = $post["sto"];
        $this->odc = $post["odc"];
        $this->odp = $post["odp"];
        $this->tgl = $date;
        $this->status = $post["optionsRadiosInline"];

        $this->db->insert($this->_table, $this);
    }
	
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
	
    private function _uploadImage(){
			
		$config['upload_path']          = './images/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']            = $this->id.'.jpg';
		$config['overwrite']			= true;
		$config['max_size']             = '1024'; // 1MB = 1024
		//$config['max_width']            = '600';
		//$config['max_height']           = '800';

		$this->load->library('upload', $config); // Load librari upload 

		if($this->upload->do_upload('image')){ // Lakukan upload dan Cek jika proses upload berhasil      
			// Jika berhasil : 
			$image_data = $this->upload->data();

            $configer =  array(
              'image_library'   => 'gd2',
              'source_image'    =>  $image_data['full_path'],
              'maintain_ratio'  =>  FALSE,
              'width'           =>  600,
              'height'          =>  800,
              'quality'         =>  '50%',
            );
            $this->image_lib->clear();
            $this->image_lib->initialize($configer);
            $this->image_lib->resize();
 			
			$return = array('result' => 'success', 'image' => $this->upload->data(), 'error' => '');      
			return $return;    
		}
		else{      
			// Jika gagal :      
			$return = array('result' => 'failed', 'image' => '', 'error' => $this->upload->display_errors());      
			return $return;    
		}
	}
}