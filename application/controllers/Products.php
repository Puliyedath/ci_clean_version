<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
        echo "inside the index for Products controller";
	}

    public function show($var){
        echo "The variable that show got was $var";
        echo "<br>";
    }

    public function edit($var){
        echo "The variable that edit got was $var";
        echo "<br>";
    }
}

//end of main controller
