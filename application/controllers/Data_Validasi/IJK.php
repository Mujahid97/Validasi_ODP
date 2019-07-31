<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IJK extends CI_Controller {

	public function index()
	{
		$this->load->view('data-validasi/IJK/index');
    }
    public function Monitoring()
	{
		$this->load->view('data-validasi/IJK/Monitoring');
    }
    public function Validasi()
	{
		$this->load->view('data-validasi/IJK/Validasi');
    }
    public function Detail()
	{
		$this->load->view('data-validasi/IJK/Detail');
    }
    public function RekapDC()
	{
		$this->load->view('data-validasi/IJK/RekapDC');
    }
}
