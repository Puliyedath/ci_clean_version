<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        date_default_timezone_set('America/Los_Angeles');
		//$this->output->enable_profiler();
	}

	public function index()
	{
        $this->populateView();
        //$this->load->view('index.php');
	}

    public function populateView(){
        $date = date('Y-m-d H:i:s');
        $this->session->set_flashdata('ttt', $date);
        $this->load->view('index.php');
    }
}

//end of main controller
