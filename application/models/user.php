<?
class User extends CI_Model {

    private $id;
    private $name;
    private $email;
    private $password;
    private $first_name;
    private $last_name;


    public function __construct()
    {
        parent::__construct();

    }
    
    function Get($email, $pwd) {
        $result = $this->db->query("Select * from users where email=? and password=?", array($email, $pwd))->row_array();
        return $result;
    }

    public function add($post){
        $query = "insert into users(email, first_name, last_name, password) values(?,?,?,?)";
        $this->db->query($query, array($post['email'], $post['first_name'], $post['last_name'], $post['pwd']));
    }

}
