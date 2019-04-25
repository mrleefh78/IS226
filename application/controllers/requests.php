<?php

    class Requests extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of Requests';
            $data['requests'] =  $this->request_model->get_requests();
            $this->load->view('templates/header');
            $this->load->view('requests/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($req_id = NULL){
            
           
            $data['requests'] =  $this->request_model->get_requests($req_id);
            if(empty($data['requests'])){
                show_404();
            }
            $data['title'] = $data['requests']['req_id'];

            $this->load->view('templates/header');
            $this->load->view('requests/view', $data);
            $this->load->view('templates/footer');

        }

       

        public function create(){
            
            $data['title'] = 'Create Requests';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('req_date','req_date','required');
            $this->form_validation->set_rules('req_by','req_by','required');
            $this->form_validation->set_rules('req_notes','req_notes','required');
            // $this->form_validation->set_rules('address','address','required');
            // $this->form_validation->set_rules('contact_no','contact_no','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('requests/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->request_model->create_request())
                    {                             
                        $this->session->set_flashdata('msg_success','Request created successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('requests');

            }           

        }

       

        public function edit($req_id = NULL){
            $data['request'] =  $this->request_model->get_requests($req_id);
            if(empty($data['request'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update Request';

            $this->load->view('templates/header');
            $this->load->view('requests/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->request_model->update_request($id);
            redirect('requests');
        }

        public function delete($id){
            $this->request_model->delete_request($id);
            redirect('requests');
        }

    }