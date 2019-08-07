<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GBG extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_Sebelumnya/GBG_MODEL');
	  }
	
	public function index()
	{
		$this->load->view('data-sebelumnya/GBG');
	}
	
	public function view(){
		$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
		$limit = $_POST['length']; // Ambil data limit per page
		$start = $_POST['start']; // Ambil data start
		$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
		$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

		$sql_total = $this->GBG_MODEL->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->GBG_MODEL->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->GBG_MODEL->count_filter($search); // Panggil fungsi count_filter pada SiswaModel

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
