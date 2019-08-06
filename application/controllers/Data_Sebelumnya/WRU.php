<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WRU extends CI_Controller {

	public function index()
	{
		$this->load->view('data-validasi/WRU/index');
    }
    public function Monitoring()
	{
		$this->load->view('data-validasi/WRU/Monitoring');
    }
    public function Validasi()
	{
		$this->load->view('data-validasi/WRU/Validasi');
    }
    public function Detail()
	{
		$this->load->view('data-validasi/WRU/Detail');
    }
    public function RekapDC()
	{
		$this->load->view('data-validasi/WRU/RekapDC');
    }
}
