<?php

    class Suppliers extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of Suppliers';
            $data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->load->view('templates/header');
            $this->load->view('suppliers/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($supplier_id = NULL){
            
           
            $data['supplier'] =  $this->supplier_model->get_suppliers($supplier_id);
            if(empty($data['supplier'])){
                show_404();
            }
            $data['title'] = $data['supplier']['supplier_id'];

            $this->load->view('templates/header');
            $this->load->view('suppliers/view', $data);
            $this->load->view('templates/footer');

        }

        public function create(){
            
            $data['title'] = 'Create Suppliers';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('supplier_name','supplier_name','required');
            // $this->form_validation->set_rules('contact_person','contact_person','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('suppliers/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                $this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                redirect('suppliers');

            }

           

        }
    }