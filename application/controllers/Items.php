<?php

    class Items extends CI_Controller {
        public function index(){
        }
        public function item(){
            $data['title'] = 'List of Inventory Items';
           
            $data['items'] =  $this->item_model->get_items();
            $this->load->view('templates/header');
            $this->load->view('items/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($item_id = NULL){
            
           
            $data['item'] =  $this->item_model->get_items($item_id);
            if(empty($data['item'])){
                show_404();
            }
            $data['title'] = $data['item']['item_id'];

            $this->load->view('templates/header');
            $this->load->view('items/view', $data);
            $this->load->view('templates/footer');

        }

       

        public function create(){
            
            $data['title'] = 'Create Inventory Items';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('item_name','item_name','required');
            // $this->form_validation->set_rules('contact_person','contact_person','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('items/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->item_model->create_item())
                    {                             
                        $this->session->set_flashdata('msg_success','Inventory Item added successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('items/item');

            }           

        }

       

        public function edit($supplier_id = NULL){
            $data['supplier'] =  $this->supplier_model->get_suppliers($supplier_id );
            if(empty($data['supplier'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update Supplier';

            $this->load->view('templates/header');
            $this->load->view('suppliers/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->supplier_model->update_supplier($id);
            redirect('suppliers');
        }

        public function delete($id){
            $this->supplier_model->delete_supplier($id);
            redirect('suppliers');
        }
    }