<?php
    class Course extends CI_Model{
        private $id;
        private $name;
        private $description;
        private $date;
        private $action;

        /**
         * @param mixed dd
         */
        public function __construct()
        {
            parent::__construct();
        }

        public function getAll()
        {
            $output = "";
            $courses = $this->db->query("select c.id, c.name, c.description, c.date,a.name as 'action' from courses c LEFT JOIN actions a ON a.id=c.Actions")->result_array();
            foreach ($courses as $key => $course) {
                $output = $output . "<tr>" . $this->stringify($course) . "</tr><br>";

            }
            return $output;
        }

        public function deleteCourse($id){
            $query = "DELETE FROM courses WHERE id=?";
            $this->db->query($query, array($id));
        }

        public function addCourse($course){
            $query ="insert into courses(name, description, date, Actions) values (?, ?,now(),1)";
            $this->db->query($query, array($course['name'], $course['description']));
        }

        private function stringify($course){
            return "<td>{$course['name']}</td><td>{$course['description']}</td><td>{$course['date']}</td><td><a href='delete/{$course['id']}'>{$course['action']}</a></td>";
        }
        
        
    }
?>
