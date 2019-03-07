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

        public function item_class(){
            $data['title'] = 'List of Item Class';
           
            $data['class'] =  $this->item_model->get_itemclass();
            $this->load->view('templates/header');
            $this->load->view('items/class_index', $data);
            $this->load->view('templates/footer');

        }

         public function class_view($item_id = NULL){
            
           
            $data['class'] =  $this->item_model->get_itemclass($item_id);
            if(empty($data['class'])){
                show_404();
            }
            $data['title'] = $data['class']['item_id'];

            $this->load->view('templates/header');
            $this->load->view('items/class_view', $data);
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
            
            public function class_create(){
            
            $data['title'] = 'Create Item Class';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('item_name','item_name','required');
            // $this->form_validation->set_rules('contact_person','contact_person','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('items/class_create', $data);
                $this->load->view('templates/footer');

            }
            else {
               
                if ($this->item_model->create_itemclass())
                    {                             
                        $this->session->set_flashdata('msg_success','Item Class added successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('items/item_class');

            }           

        }
       

        public function edit($item_id = NULL){
            $data['item'] =  $this->item_model->get_items($item_id );
            if(empty($data['item'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update Inventory Items';

            $this->load->view('templates/header');
            $this->load->view('items/edit', $data);
            $this->load->view('templates/footer');
        }

       public function edit_class($item_id = NULL){
            $data['class'] =  $this->item_model->get_itemclass($item_id );
            if(empty($data['class'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update Item Class';

            $this->load->view('templates/header');
            $this->load->view('items/class_edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->item_model->update_item($id);
            redirect('items/item');
        }

        public function update_class($id){
            $this->item_model->update_itemclass($id);
            redirect('items/item_class');
        }

        public function delete($id){
            $this->item_model->delete_item($id);
            redirect('items/item');
        }
         public function delete_class($id){
            $this->item_model->delete_itemclass($id);
            redirect('items/item_class');
        }
    }