<?php

    class Locations extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of Locations';
            $data['locations'] =  $this->supplier_model->get_locations();
            $this->load->view('templates/header');
            $this->load->view('locations/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($supplier_id = NULL){
            
           
            $data['supplier'] =  $this->supplier_model->get_locations($supplier_id);
            if(empty($data['supplier'])){
                show_404();
            }
            $data['title'] = $data['supplier']['supplier_id'];

            $this->load->view('templates/header');
            $this->load->view('locations/view', $data);
            $this->load->view('templates/footer');

        }

       
        public function create(){
            
            $data['title'] = 'Create Suppliers';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('description','description','required');
            // $this->form_validation->set_rules('contact_person','contact_person','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('locations/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->supplier_model->create_location())
                    {                             
                        $this->session->set_flashdata('msg_success','Supplier added successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('locations');

            }           

        }

       

        public function edit($id = NULL){
            $data['location'] =  $this->supplier_model->get_locations($id);
            if(empty($data['location'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update Supplier';

            $this->load->view('templates/header');
            $this->load->view('locations/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->supplier_model->update_location($id);
            redirect('locations');
        }

        public function delete($id){
            $this->supplier_model->delete_location($id);
            redirect('locations');
        }

        }