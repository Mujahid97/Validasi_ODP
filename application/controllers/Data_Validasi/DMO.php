<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DMO extends CI_Controller {

	public function index()
	{
		$this->load->view('data-validasi/DMO/index');
    }
    public function Monitoring()
	{
		$this->load->view('data-validasi/DMO/Monitoring');
    }
    public function Validasi()
	{
		$this->load->view('data-validasi/DMO/Validasi');
    }
    public function Detail()
	{
		$this->load->view('data-validasi/DMO/Detail');
    }
    public function RekapDC()
	{
		$this->load->view('data-validasi/DMO/RekapDC');
    }
}
