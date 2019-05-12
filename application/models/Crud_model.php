<?php
  class Crud_model extends CI_Model{

        public function getData()
      {
          $query=$this->db->get('customer');//combine stmt. select user with id =3
          return $query->result();// use as an object

      }



  }


?>
