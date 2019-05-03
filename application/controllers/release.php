<?php

    class Release extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of Release Requests';
            $data['release'] =  $this->release_model->get_data();
            $this->load->view('templates/header');
            $this->load->view('release/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($req_id = NULL){
            
           
            $data['release'] =  $this->release_model->get_data($rel_id);
            if(empty($data['release'])){
                show_404();
            }
            $data['title'] = $data['release']['rel_id'];

            $this->load->view('templates/header');
            $this->load->view('release/view', $data);
            $this->load->view('templates/footer');

        }
       

        public function create(){
            
            $data['title'] = 'Release Request';
            $data['ref'] = $this->release_model->get_reqlistDrop(); 
            // $reqid['req_id'] = $this->input->post('req_id';

            

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            // $this->form_validation->set_rules('location_id','location_id','required');
            // $this->form_validation->set_rules('dept_id','dept_id','required');
            $this->form_validation->set_rules('req_by','req_by','required');
            // $this->form_validation->set_rules('address','address','required');
            // $this->form_validation->set_rules('contact_no','contact_no','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('release/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->release_model->create_Entry())
                    {           
                       if ($this->release_model->update_req_entry())
                       {
                           
                       }

                        $this->session->set_flashdata('msg_success','Release successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('release');

            }           

        }

       

        public function edit($req_id = NULL){
            $data['release'] =  $this->release_model->get_data($req_id );
            $data['ref'] = $this->release_model->get_reqlistDrop(); 
            if(empty($data['release'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update Release';

            $this->load->view('templates/header');
            $this->load->view('release/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->release_model->update_entry($id);
            redirect('release');
        }

        public function delete($id){
            $this->release_model->delete_entry($id);
            redirect('release');
        }
    }