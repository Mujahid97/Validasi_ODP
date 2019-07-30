<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_validasi extends CI_Controller {

	public function index()
	{
		$this->load->view('data-validasi/index');
    }

    public function DMO()
	{
		$this->load->view('data-validasi/DMO');
    }
    
    public function GBG()
	{
		$this->load->view('data-validasi/GBG');
    }
    
    public function IJK()
	{
		$this->load->view('data-validasi/IJK');
    }
    
    public function JGR()
	{
		$this->load->view('data-validasi/JGR');
    }
    
    public function MYR()
	{
		$this->load->view('data-validasi/MYR');
    }

    public function RKT()
	{
		$this->load->view('data-validasi/RKT');
    }
	
}
