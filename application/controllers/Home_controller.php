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

        $this->form_validation->set_rules('customer_name', 'Customer name', 'required|alpha|xss_clean');
        $this->form_validation->set_rules('phone', 'contact phone', 'required|xss_clean');
        $this->form_validation->set_rules('address', 'contact address', 'required|xss_clean');
        $this->form_validation->set_rules('city', 'current city', 'required|xss_clean');
        $this->form_validation->set_rules('country', 'Countrt', 'required|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="text-danger red">', '</div>');

                if ($this->form_validation->run() )
                {
                  //$this->load->model('Crud_model');
                  //$this->Crud_model->insertData($data);
                        //$this->load->view('myform');
                        //echo "success";
                }
                else
                {
                        $this->load->view('create');
                      //echo validation_errors();
                }
          //$this->load->library('form_validation');
          //$this->form_validation->set_rules('customer_name','customer name','required|alpha|xss_clean');
      }

}
