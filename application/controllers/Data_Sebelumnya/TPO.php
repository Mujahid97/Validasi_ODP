<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TPO extends CI_Controller {

	public function index()
	{
		$this->load->view('data-validasi/TPO/index');
    }
    public function Monitoring()
	{
		$this->load->view('data-validasi/TPO/Monitoring');
    }
    public function Validasi()
	{
		$this->load->view('data-validasi/TPO/Validasi');
    }
    public function Detail()
	{
		$this->load->view('data-validasi/TPO/Detail');
    }
    public function RekapDC()
	{
		$this->load->view('data-validasi/TPO/RekapDC');
    }
}
