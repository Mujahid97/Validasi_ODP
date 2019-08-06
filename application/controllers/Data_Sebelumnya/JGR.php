<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JGR extends CI_Controller {

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
}
