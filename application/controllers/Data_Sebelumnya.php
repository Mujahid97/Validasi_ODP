<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Sebelumnya extends CI_Controller {

	public function index()
	{
		$this->load->view('data-sebelumnya/index');
    }

    public function DMO()
	{
		$this->load->view('data-sebelumnya/DMO');
    }
    
    public function GBG()
	{
		$this->load->view('data-sebelumnya/GBG');
    }
    
    public function IJK()
	{
		$this->load->view('data-sebelumnya/IJK');
    }
    
    public function JGR()
	{
		$this->load->view('data-sebelumnya/JGR');
    }
    
    public function MYR()
	{
		$this->load->view('data-sebelumnya/MYR');
    }

    public function RKT()
	{
		$this->load->view('data-sebelumnya/RKT');
	}
	
	public function WRU()
	{
		$this->load->view('data-sebelumnya/WRU');
	}
	
	public function TPO()
	{
		$this->load->view('data-sebelumnya/TPO');
    }
}
