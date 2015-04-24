<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Main extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->output->enable_profiler();
        }

        public function index(){
            $this->load->model('locations');
            $locations = $this->locations->getLocations();
            $result="";
            foreach ($locations as $key => $location) {
                $result = $result . "<option value=" . $location['name'] . ">" . $location['name'] . "</option>" ;
            }
            $this->session->set_userdata('locs', $result);
            $this->getLanguages();
            $this->loadView();
        }

        private function getLanguages(){
            $this->load->model('languages');
            $languages = $this->languages->getLanguages();
            $result="";
            foreach ($languages as $key => $language) {
                $result = $result . "<option value=" . $language['name'] . ">" . $language['name'] . "</option>" ;
            }
            $this->session->set_userdata('langs', $result);
}

        public function loadView(){
            $this->load->view('index.php');
        }

        public function submit(){
            if ($this->session->userdata('counter') === 0 ){
                $this->session->set_userdata('counter',1);
            }else{
                $counter = $this->session->userdata('counter');
                $counter++;
                $this->session->set_userdata('counter',$counter);
            }

            $this->session->set_userdata('name',$this->input->post('name'));
            $this->session->set_userdata('language',$this->input->post('language'));
            $this->session->set_userdata('location',$this->input->post('location'));
            $this->session->set_userdata('ta',$this->input->post('ta'));
            $this->load->view('result.php');
        }

    }

