<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GBG extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_Validasi/GBG/GBG_Detail');
		$this->load->model('Data_Validasi/GBG/GBG_Monitoring');
		$this->load->model('Data_Validasi/GBG/GBG_RDC');
		$this->load->model('Data_Validasi/GBG/GBG_Validasi');
	  }

	public function index()
	{
		$this->load->view('data-validasi/GBG/index');
    }
    public function Monitoring()
	{
		$this->load->view('data-validasi/GBG/Monitoring');
    }
    public function Validasi()
	{
		$this->load->view('data-validasi/GBG/Validasi');
    }
    public function Detail()
	{
		$this->load->view('data-validasi/GBG/Detail');
    }
    public function RekapDC()
	{
		$this->load->view('data-validasi/GBG/RekapDC');
	}
	
	public function view_detail(){
		$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
		$limit = $_POST['length']; // Ambil data limit per page
		$start = $_POST['start']; // Ambil data start
		$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
		$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

		$sql_total = $this->GBG_Detail->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->GBG_Detail->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->GBG_Detail->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

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

		$sql_total = $this->GBG_Monitoring->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->GBG_Monitoring->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->GBG_Monitoring->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

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

		$sql_total = $this->GBG_RDC->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->GBG_RDC->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->GBG_RDC->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

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

		$sql_total = $this->GBG_Validasi->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->GBG_Validasi->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->GBG_Validasi->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

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
