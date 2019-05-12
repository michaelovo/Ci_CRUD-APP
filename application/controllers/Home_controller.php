<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

      public function index()
    	{
        $this->load->model('Crud_model');
        $this->load->helper('html');
        $data['results']= $this->Crud_model->getData();
      	$this->load->view('home', $data);
        /*
          this is an alternative way of doing the above
          $records = $this->Crud_model->getData();
          $this->load->view('home', ['records'=>$records]);
        */

    	}

      public function create()
      {
        	$this->load->view('create');
      }
      public function save()
      {
          //$this->load->library('form_validation');
          //$this->form_validation->set_rules('customer_name','customer name','required|alpha|xss_clean');
      }

}
