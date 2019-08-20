<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	
    public function __construct()
    {
		parent::__construct();
        $this->load->model('Galerimodel');
        $this->load->library('form_validation');
		$this->load->helper('date');
		$this->load->library('image_lib');
	}
	
	public function view()
	{
		
		$data['pilihsto'] = $this->Galerimodel->pilihsto();
		$data['pilihbulan'] = $this->Galerimodel->pilihbulan();
		$data['pilihtahun'] = $this->Galerimodel->pilihtahun();
		$data['odc'] = $this->Galerimodel->getODC();
		$data['badge'] = $this->Galerimodel->badge();
		$data['stobadge'] = $this->Galerimodel->stobadge();
		$data['count'] = $this->Galerimodel->image_count();
		
        // load view admin/overview.php
        $this->load->view("admin/galeriview", $data);
	}
	
	public function upload()
	{
		$galeri = $this->Galerimodel;
        $validation = $this->form_validation;
		
		$this->form_validation->set_rules('sto', 'sto', 'required');
		$this->form_validation->set_rules('odc', 'odc', 'required');
		$this->form_validation->set_rules('odp', 'odp', 'required');
		if (empty($_FILES['image']['name']))
		{
			$this->form_validation->set_rules('image', 'Document', 'required');
		}
		
		
        //$validation->set_rules($galeri->rules());
		$tanggal = '%Y-%m-%d';
		$time = time();
		
		$date = mdate($tanggal,$time);
		
		if ($validation->run()) {
            $galeri->save($date);
            $this->session->set_flashData('success', 'Berhasil disimpan');
        } else {
            $this->session->set_flashData('failed', 'Silahkan Lengkapi Data Terlebih Dahulu!');
		}
		
		$data['pilihsto'] = $this->Galerimodel->pilihsto();
		$data['pilihbulan'] = $this->Galerimodel->pilihbulan();
		$data['pilihtahun'] = $this->Galerimodel->pilihtahun();
		$data['odc'] = $this->Galerimodel->getODC();
		
        // load view admin/overview.php
        $this->load->view("admin/galeriupload", $data);
	}
	
	public function member($odc)
	{

		$data['pilihsto'] = $this->Galerimodel->pilihsto();
		$data['pilihbulan'] = $this->Galerimodel->pilihbulan();
		$data['pilihtahun'] = $this->Galerimodel->pilihtahun();
		$data['odp'] = $this->Galerimodel->getODP($odc);
		$data['odcname'] = $odc;
		
        // load view admin/overview.php
        $this->load->view("admin/galeribackup", $data);
	}
	
	public function odc_autocomplete()
	{
		if(isset($_GET['odc'])){
			$result = $this->Galerimodel->auto_odc($_GET['odc']);
			if(count($result) >0){
				foreach ($result as $row) $arr_result[] = $row->ODC;
				echo json_encode($arr_result);
			}
		}
	}
	
	public function index()
    {
        $data["upload"] = $this->Galerimodel->getAll();
    }
}
