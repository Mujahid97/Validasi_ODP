<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GBG extends CI_Controller {

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
}
