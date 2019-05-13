<?php
  class Crud_model extends CI_Model{

      public function getData()
      {
          $query=$this->db->get('customer');//combine stmt. select user with id =3
          return $query->result();// use as an object

      }

    //  public function insertData($data)
    //  {
      //    return $this->db->insert('customer',$data);//combine stmt. select user with id =3
        //  return $query->result();// use as an object

    //  }


  }


?>
