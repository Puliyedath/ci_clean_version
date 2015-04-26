<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Main extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            //$this->output->enable_profiler();
        }

        public function index()
        {
            $this->load->model('course');
            $courses = $this->course->getAll();
            $this->loadView($courses);
            //$this->session->set_flashdata('courses',$courses);
            //$this->load->view('index.php');
        }

        public function insert(){
            $course = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description')
            );
            $this->load->model('course');
            $this->course->addCourse($course);
            redirect();
        }

        public function delete($id){
            $this->load->model('course'); 
            $this->course->deleteCourse($id); 
            redirect();
        }

        private function loadView($courses){
            $this->session->set_userdata('courses', $courses);
            $this->load->view('index.php');
        }
    }

