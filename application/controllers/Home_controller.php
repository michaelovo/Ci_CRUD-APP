<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {
// NB: ALL LIBRARIES, HELPERS, MODEL, ETC HAVE BEEN AUTOLOADED IN autoload.php
      public function index()
    	{
        //$this->load->model('Crud_model');
        $data['results']= $this->Crud_model->getData();
      	$this->load->view('home', $data);

        /*  this is an alternative way of doing the above
          $results = $this->Crud_model->getData();
          $this->load->view('home', ['results'=>$results]);
`         */

    	}

      public function create()
      {
        	$this->load->view('create');
      }

      public function save()
      {
            // Validation
        $this->form_validation->set_rules('customer_name', 'Customer name', 'required');
        $this->form_validation->set_rules('phone', 'contact phone', 'required');
        $this->form_validation->set_rules('address', 'contact address', 'required');
        $this->form_validation->set_rules('city', 'current city', 'required');
        $this->form_validation->set_rules('country', 'Countrt', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger red">', '</div>');

          // validation conditions
                if ($this->form_validation->run() )
                {
                      $data=$this->input->post();

                      if($this->Crud_model->insertData($data))
                      {
                          $this->session->set_flashdata('response','Records saved Successfully!');

                      }
                      else
                      {
                          $this->session->set_flashdata('response','Records failed to save');

                      }
                        //return redirect('home');
                        // return to home page
                      $data['results']= $this->Crud_model->getData();
                      $this->load->view('home', $data);
                }
                else
                {
                      $this->load->view('create');
                }
      }//end of save();

      public function edit($record_id)
      {
          // edit the selected user_id records
        $data = $this->Crud_model->getAllRecords($record_id);
        $this->load->view('update', ['data'=>$data]);

      }

        function update($record_id){
          // Validate before updating records
      $this->form_validation->set_rules('customer_name', 'Customer name', 'required');
      $this->form_validation->set_rules('phone', 'contact phone', 'required');
      $this->form_validation->set_rules('address', 'contact address', 'required');
      $this->form_validation->set_rules('city', 'current city', 'required');
      $this->form_validation->set_rules('country', 'Countrt', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger red">', '</div>');

        // validation conditions
              if ($this->form_validation->run() )
              {
                    $data=$this->input->post();
                    if($this->Crud_model->updateRecords($record_id, $data))
                    {
                        $this->session->set_flashdata('response','Records Updated Successfully!');
                    }
                    else
                    {
                        $this->session->set_flashdata('response','Records failed to Update');
                    }


                    //return redirect('home');
                    $data['results']= $this->Crud_model->getData();
                    $this->load->view('home', $data);
              }
              else
              {
                    $this->load->view('update');
              }

        }//end update()

        function delete($record_id)
        {
                if($this->Crud_model->deleteRecords($record_id))
                {
                    $this->session->set_flashdata('response','Record Deleted Successfully!');
                }
                else
                {
                    $this->session->set_flashdata('response','Record failed to Delete');
                }

                //return redirect('home');
                $data['results']= $this->Crud_model->getData();
                $this->load->view('home', $data);
        }





}
