<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
	}

	public function index()
	{
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        //validate the email and password 
        $this->form_validation->set_rules('email', 'email', 'required|callback_validate_login', array(
                'required' => "You must provide a %s"
            ));
        $this->form_validation->set_rules('pwd', 'pwd', 'required', array(
                'required' => "You must provide a %s"
            ));

        if($this->form_validation->run() == false){
            $this->load->view('index.php');
        }
        else{
            $this->load->view('home.php');
        }


	}

    public function register(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|is_unique[users.email]|callback_valid_email',
                'errors' => array(
                    'require' => 'email field cannot be empty'
                    )

                ),

           array(
                'field' => 'pwd',
                'label' => 'password',
                'rules' => 'required|min_length[8]|callback_match_password',
                'errors' => array(
                    'require' => 'password field cannot be empty'
                    )

                )
            );

        $this->form_validation->set_rules($config);
        $this->form_validation->set_message('is_unique', 'user %s is already registered');
        $this->form_validation->set_message('min_length', 'password %s has to be more than 8 characters');

        if($this->form_validation->run() == false){
            $this->load->view('index.php');
        }else{
            //if the registration goes through sucessfully
            $this->load->model('user');
            $post = $this->input->post(null, true);
            $post['pwd'] = md5($post['pwd']);
            $this->user->add($post);
            $this->session->set_userdata('user', $post);
            $this->load->view('home.php');
        }
    }

    function match_password($pwd){
        $cpwd = $this->input->post('cpwd', true);
        if ($pwd !== $cpwd){
            $this->form_validation->set_message('match_password', "passwords dont match");
            return false;
        }else{
            return true;
        }
    }

    function valid_email($email){
        if (strpos($email,"@")){
            return true;
        }
        else{
            $this->form_validation->set_message('valid_email', "email entered is not valid");
            return false;
        }
    }

    function validate_login($email){
        $pwd = $this->input->post('pwd',true);
        $pwd = md5($pwd);
        $this->load->model('user');
        $user = $this->user->get($email,$pwd);
        if(count($user) > 0){
            $this->session->set_userdata('user', $user);
            return true;
        }else{
            $this->form_validation->set_message('validate_login',"Invalid login credentials");
            return false;
        }
    }

}

