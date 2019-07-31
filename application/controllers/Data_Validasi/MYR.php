<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MYR extends CI_Controller {

	public function index()
	{
		$this->load->view('data-validasi/MYR/index');
    }
    public function Monitoring()
	{
		$this->load->view('data-validasi/MYR/Monitoring');
    }
    public function Validasi()
	{
		$this->load->view('data-validasi/MYR/Validasi');
    }
    public function Detail()
	{
		$this->load->view('data-validasi/MYR/Detail');
    }
    public function RekapDC()
	{
		$this->load->view('data-validasi/MYR/RekapDC');
    }
}
