<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('iGold.php');
class Main extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
        $this->session->set_userdata('gold', 0);
        $this->session->set_userdata('messages', "");
        $this->loadView();
	}

    public function findGold(){
        $iGold = getGoldMaker($this->input->post('iname'));
        $gAndM = $iGold->getGold();
        $gold = $this->session->userdata('gold') + $gAndM['gold'];
        $messages = $this->session->userdata('messages') . "<br>" . $gAndM['message'];
        if ($gold < 0) {
            $this->session->set_userdata('gold', 0);
        }else{
            $this->session->set_userdata('gold', $gold);
        }
        $this->session->set_userdata('messages', $messages);

        $this->loadView();
    }

    private function loadView(){
        $this->load->view('index.php');
    }
}

