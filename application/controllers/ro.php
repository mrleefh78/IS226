<?php

    class Ro extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of Receive Orders';
            $data['receives'] =  $this->receive_model->get_receive();
            $this->load->view('templates/header');
            $this->load->view('ro/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($re_id = NULL){
            
           
            $data['receives'] =  $this->receive_model->get_receive($re_id);
            if(empty($data['receives'])){
                show_404();
            }
            $data['title'] = $data['receives']['receive_id'];

            $this->load->view('templates/header');
            $this->load->view('ro/view', $data);
            $this->load->view('templates/footer');

        }

       

        public function create(){
            
            $data['title'] = 'Create Receive Order';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('receive_date','receive_date','required');
            // $this->form_validation->set_rules('req_no','req_no','required');
            // $this->form_validation->set_rules('location_id','location_id','required');
            // $this->form_validation->set_rules('dept_id','dept_id','required');
            $this->form_validation->set_rules('receive_by','receive_by','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('ro/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->receive_model->create_receive())
                    {                             
                        $this->session->set_flashdata('msg_success','Receive added successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('ro');

            }           

        }

       

        public function edit($po_id = NULL){
            $data['ro'] =  $this->receive_model->get_receive($po_id );
            if(empty($data['ro'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update Receive Order';

            $this->load->view('templates/header');
            $this->load->view('ro/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->receive_model->update_receive($id);
            redirect('ro');
        }

        public function delete($id){
            $this->receive_model->delete_receive($id);
            redirect('ro');
        }
    }