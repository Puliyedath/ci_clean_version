<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->load->model('product');
        $products = $this->product->getAll();
        $this->session->set_flashdata('products',$products);
        $this->load->view('index.php', array('products' => $products));
	}

   /**
    * adds a new product to the database
    *
    * @return void
    */
   public function addProduct()
   {
       $this->load->view('newProduct.php');
   }

    public function update($id){

        $post = $this->input->post(NULL,true);
        $this->load->model('product');
        $this->product->update($post,$id);
        redirect("/");
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function insertProduct()
    {
        //insert a product in your database
        $post = $this->input->post(NULL,true);
        $this->load->model('product');
        $this->product->add($post);
        redirect("/");
        
    }

    

}
