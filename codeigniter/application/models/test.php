<?php
class Test extends CI_Model {

     public function __construct()
    {
        parent::__construct();
    }

       public function getAllTests() {
       

$query = $this->db->get('test');
       return $query->result();
  


       }
}
