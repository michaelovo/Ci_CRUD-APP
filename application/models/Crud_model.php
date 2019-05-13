<?php
  class Crud_model extends CI_Model{

      public function getData()
      {
          $query=$this->db->get('customer');//combine stmt. select user with id =3
          return $query->result();// use as an object

      }

      public function insertData($data)
      {
          return $this->db->insert('customer',$data);//combine stmt. select user with id =3
        //  return $query->result();// use as an object

      }

      function getAllRecords($record_id)
      {
            // this function displays record using the selected user id
          $query = $this->db->get_where('customer', array('id' => $record_id));
        // return user details if exists
            if($query->num_rows()>0)
            {
              return $query->row();
            }
      }

      function updateRecords($record_id, $data)
      {

        return $this->db->update('customer', $data, array('id' => $record_id));

        /*
        // this is an alternative method
        return $this->db->where('id', $record_id)
                  ->update('customer', $data);
          */
      }

      function deleteRecords($record_id)
      {
        return $this->db->delete('customer', array('id' => $record_id));
        /*
      return  $this->db->where('id', $record_id)
                ->delete('customer');
        */
      }


  }


?>
