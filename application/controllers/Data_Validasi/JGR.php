<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JGR extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_Validasi/JGR/JGR_Detail');
		$this->load->model('Data_Validasi/JGR/JGR_Monitoring');
		$this->load->model('Data_Validasi/JGR/JGR_RDC');
		$this->load->model('Data_Validasi/JGR/JGR_Validasi');
	  }

	public function index()
	{
		$this->load->view('data-validasi/JGR/index');
    }
    public function Monitoring()
	{
		$this->load->view('data-validasi/JGR/Monitoring');
    }
    public function Validasi()
	{
		$this->load->view('data-validasi/JGR/Validasi');
    }
    public function Detail()
	{
		$this->load->view('data-validasi/JGR/Detail');
    }
    public function RekapDC()
	{
		$this->load->view('data-validasi/JGR/RekapDC');
	}
	
	//Ambil data dari database
	public function view_detail(){
		$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
		$limit = $_POST['length']; // Ambil data limit per page
		$start = $_POST['start']; // Ambil data start
		$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
		$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

		$sql_total = $this->JGR_Detail->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->JGR_Detail->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->JGR_Detail->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

		$callback = array(
		    'draw'=>$_POST['draw'], // Ini dari datatablenya
		    'recordsTotal'=>$sql_total,
		    'recordsFiltered'=>$sql_filter,
		    'data'=>$sql_data
		);

		header('Content-Type: application/json');
		echo json_encode($callback); // Convert array $callback ke json
	}
	
	//Ambil data dari database
	public function view_monitoring(){
		$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
		$limit = $_POST['length']; // Ambil data limit per page
		$start = $_POST['start']; // Ambil data start
		$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
		$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

		$sql_total = $this->JGR_Monitoring->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->JGR_Monitoring->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->JGR_Monitoring->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

		$callback = array(
		    'draw'=>$_POST['draw'], // Ini dari datatablenya
		    'recordsTotal'=>$sql_total,
		    'recordsFiltered'=>$sql_filter,
		    'data'=>$sql_data
		);

		header('Content-Type: application/json');
		echo json_encode($callback); // Convert array $callback ke json
	}

	//Ambil data dari database
	public function view_rdc(){
		$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
		$limit = $_POST['length']; // Ambil data limit per page
		$start = $_POST['start']; // Ambil data start
		$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
		$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

		$sql_total = $this->JGR_RDC->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->JGR_RDC->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->JGR_RDC->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

		$callback = array(
		    'draw'=>$_POST['draw'], // Ini dari datatablenya
		    'recordsTotal'=>$sql_total,
		    'recordsFiltered'=>$sql_filter,
		    'data'=>$sql_data
		);

		header('Content-Type: application/json');
		echo json_encode($callback); // Convert array $callback ke json
	}

	//Ambil data dari database
	public function view_validasi(){
		$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
		$limit = $_POST['length']; // Ambil data limit per page
		$start = $_POST['start']; // Ambil data start
		$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
		$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

		$sql_total = $this->JGR_Validasi->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->JGR_Validasi->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->JGR_Validasi->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

		$callback = array(
		    'draw'=>$_POST['draw'], // Ini dari datatablenya
		    'recordsTotal'=>$sql_total,
		    'recordsFiltered'=>$sql_filter,
		    'data'=>$sql_data
		);

		header('Content-Type: application/json');
		echo json_encode($callback); // Convert array $callback ke json
	}
}
