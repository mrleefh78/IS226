<?php

    class PurchaseOrders extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of PR';
            $data['po'] =  $this->pr_model->get_po();
            $this->load->view('templates/header');
            $this->load->view('po/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($po_id = NULL){
            
           
            $data['po'] =  $this->pr_model->get_po($po_id);
            if(empty($data['po'])){
                show_404();
            }
            $data['title'] = $data['po']['po_id'];

            $this->load->view('templates/header');
            $this->load->view('po/view', $data);
            $this->load->view('templates/footer');

        }

       

        public function create(){
            
            $data['title'] = 'Create Purchase Order';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('po_date','po_date','required');
            // $this->form_validation->set_rules('req_no','req_no','required');
            // $this->form_validation->set_rules('location_id','location_id','required');
            // $this->form_validation->set_rules('dept_id','dept_id','required');
            $this->form_validation->set_rules('po_by','po_by','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('po/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->po_model->create_po())
                    {                             
                        $this->session->set_flashdata('msg_success','PO added successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('po');

            }           

        }

       

        public function edit($po_id = NULL){
            $data['po'] =  $this->po_model->get_pr($po_id );
            if(empty($data['po'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update PO';

            $this->load->view('templates/header');
            $this->load->view('po/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->po_model->update_po($id);
            redirect('po');
        }

        public function delete($id){
            $this->po_model->delete_po($id);
            redirect('pr');
        }
    }