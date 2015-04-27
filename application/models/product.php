<?php
    class Product extends CI_Model{
        private $id;
        private $name;
        private $description;
        private $price;
        private $actions;

        /**
         * @param mixed 
         */
        public function __construct()
        {
            parent::__construct();
        }

        public function getAll(){
            $products = $this->db->query("Select * from Products")->result_array();
            $actions = $this->db->query("Select * from actions")->result_array();
            $output = "";
            foreach ($products as $product) {
                $output = $output . $this->stringify($product, $actions);
            }
            return $output;
        }

        /**
         * adds a product to the database
         *
         * @return void
         */
        public function add($product)
        {
            $query = "insert into products(name,description,price,actions) values(?,?,?,'1,2,3')";
            $this->db->query($query, array($product['name'],$product['description'], $product['price']));
        }

        /**
         * undocumented function
         *
         * @return void
         */
        public function get($id)
        {
            $product = $this->db->query("Select * from Products where id=$id")->result_array();
            return $product;
        }

        public function remove($id){
            $this->db->query("Delete from products where id=$id");
        }

        public function update($post, $id){
            $product = $this->get($id);
            $query = "update products set name = '{$post['name']}', description = '{$post['description']}', price= '{$post['price']}' where id=$id";
            $this->db->query($query);
            redirect("/");
        }
        
        

        private function stringify($product, $actions){
            return join('', array(
                "<tr>",
                "<td>{$product['name']}</td>",
                "<td>{$product['description']}</td>",
                "<td>{$product['price']}</td>",
                "<td>",
                    "<ul>",
                        "<li><a href=/actions/show/{$product['id']}>Show</a></li>",
                        "<li><a href=/actions/edit/{$product['id']}>Edit</a></li>",
                        "<li><a href=/actions/remove/{$product['id']}>Remove</a></li>",
                    "</ul>",
                "</td>",
                "</tr>",
                ));
        }
        
    }
?>
