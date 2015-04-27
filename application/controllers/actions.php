<?php
    /**
     * Class 
     * @author Hareesh
     */
    class actions extends CI_Controller
    {
        /**
         * @param mixed 
         */
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * undocumented function
         *
         * @return void
         */
        private function get($id)
        {
            $this->load->model('product');
            $product = $this->product->get($id);
            return $product;
        }

        /**
         * undocumented function
         *
         * @return void
         */
        public function back()
        {
            redirect();
        }
        

        /**
         * displays the product information
         *
         * @return void
         */
        public function show($id)
        {
            $product = $this->get($id);
            $this->load->view('show.php',array('product' => $product));
        }

        /**
         * undocumented function
         *
         * @return void
         */
        public function edit($id)
        {
            $product = $this->get($id);
            $this->load->view('edit.php',array('product' => $product));
        }

        /**
         * undocumented function
         *
         * @return void
         */
        public function remove($id)
        {
            $this->load->model('product');
            $this->product->remove($id);
            $this->back();
        }
        
        
        
        

    }
?>
