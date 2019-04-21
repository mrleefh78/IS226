<?php

    class PurchaseRequests extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of PR';
            $data['pr'] =  $this->pr_model->get_pr();
            $this->load->view('templates/header');
            $this->load->view('pr/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($pr_id = NULL){
            
           
            $data['pr'] =  $this->pr_model->get_pr($pr_id);
            if(empty($data['pr'])){
                show_404();
            }
            $data['title'] = $data['pr']['pr_id'];

            $this->load->view('templates/header');
            $this->load->view('pr/view', $data);
            $this->load->view('templates/footer');

        }

       

        public function create(){
            
            $data['title'] = 'Create Purchase Request';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('req_date','req_date','required');
            $this->form_validation->set_rules('req_no','req_no','required');
            $this->form_validation->set_rules('location_id','location_id','required');
            $this->form_validation->set_rules('dept_id','dept_id','required');
            $this->form_validation->set_rules('req_by','req_by','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('pr/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->pr_model->create_pr())
                    {                             
                        $this->session->set_flashdata('msg_success','PR added successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('pr');

            }           

        }

       

        public function edit($pr_id = NULL){
            $data['pr'] =  $this->pr_model->get_pr($pr_id );
            if(empty($data['pr'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update PR';

            $this->load->view('templates/header');
            $this->load->view('pr/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->pr_model->update_pr($id);
            redirect('pr');
        }

        public function delete($id){
            $this->pr_model->delete_pr($id);
            redirect('pr');
        }
    }