<?php

    class Departments extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of Departments';
            $data['departments'] =  $this->Lookup_model->get_departments();
            $this->load->view('templates/header');
            $this->load->view('departments/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($department_id = NULL){
            
           
            $data['department'] =  $this->Lookup_model->get_departments($department_id);
            if(empty($data['department'])){
                show_404();
            }
            $data['title'] = $data['department']['department_id'];

            $this->load->view('templates/header');
            $this->load->view('departments/view', $data);
            $this->load->view('templates/footer');

        }

       
        public function create(){
            
            $data['title'] = 'Create Departments';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('description','description','required');
            // $this->form_validation->set_rules('contact_person','contact_person','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('departments/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->Lookup_model->create_department())
                    {                             
                        $this->session->set_flashdata('msg_success','Department added successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('departments');

            }           

        }

       

        public function edit($id = NULL){
            $data['department'] =  $this->Lookup_model->get_departments($id);
            if(empty($data['department'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update Department';

            $this->load->view('templates/header');
            $this->load->view('departments/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->Lookup_model->update_department($id);
            redirect('departments');
        }

        public function delete($id){
            $this->Lookup_model->delete_department($id);
            redirect('departments');
        }

        }
