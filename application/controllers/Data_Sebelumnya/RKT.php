<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RKT extends CI_Controller {

	public function index()
	{
		$this->load->view('data-validasi/RKT/index');
    }
    public function Monitoring()
	{
		$this->load->view('data-validasi/RKT/Monitoring');
    }
    public function Validasi()
	{
		$this->load->view('data-validasi/RKT/Validasi');
    }
    public function Detail()
	{
		$this->load->view('data-validasi/RKT/Detail');
    }
    public function RekapDC()
	{
		$this->load->view('data-validasi/RKT/RekapDC');
    }
}
