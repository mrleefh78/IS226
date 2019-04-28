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
            $data['requestitems'] =  $this->request_model->get_request_items($req_id);
            if(empty($data['request'])){
                show_404();
            }

           // $itemdata['requestitems'] = $itemdata['requestitems']['req_id'];
           // $data['title'] = $data['requests']['req_id'];
            $data['title'] = 'Update Request';

            $this->load->view('templates/header');
            $this->load->view('requests/edit', $data);
           // $this->load->view('requestitems/view', $itemdata);
           //viewitems($req_id);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->request_model->update_request($id);


            redirect('requests');
        }

        public function additem($req_id = NULL){
            $data['title'] = 'Add Items';
            $data['req_id'] = $req_id;
           

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('item_id','item_id','required');
            $this->form_validation->set_rules('quantity','quantity','required');
            $this->form_validation->set_rules('uom','uom','required');
            // $this->form_validation->set_rules('address','address','required');
            // $this->form_validation->set_rules('contact_no','contact_no','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('requests/additem', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');
                //$id ='requests/edit/' . $id;

                if ($this->request_model->create_request_item())
              
                    {                             
                        $this->session->set_flashdata('msg_success','Request created successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                redirect('requests/edit/' .  $req_id);
                //redirect($id);

            }           


        }

        public function edititem($req_id = NULL){
            $data['request'] =  $this->request_model->get_request_items_byid($req_id);
           // $data['requestitems'] =  $this->request_model->get_request_items($req_id);
            if(empty($data['request'])){
                show_404();
            }

           // $itemdata['requestitems'] = $itemdata['requestitems']['req_id'];
           // $data['title'] = $data['requests']['req_id'];
            $data['title'] = 'Update Item';

            $this->load->view('templates/header');
            $this->load->view('requests/edititem', $data);
           // $this->load->view('requestitems/view', $itemdata);
           //viewitems($req_id);
            $this->load->view('templates/footer');
        }

        


     
        public function delete($id){
            $this->request_model->delete_request($id);
            $this->request_model->delete_request_item($id);
            redirect('requests');
        }

        public function deleteitem($id){
            
            $this->request_model->delete_request_item_by_id($id);
            //$req_id = '1'
           // redirect('requests/edit/' . $req_id);
           redirect('requests');
          // redirect($_SERVER['REQUEST_URI'], 'refresh'); 

        }


        //items  get_request_items

        public function viewitems($req_id = NULL){
            
           
            $data['requestitems'] =  $this->request_model->get_request_items($req_id);
            if(empty($data['requestitems'])){
                show_404();
            }
            //$data['title'] = $data['requestitems']['req_id'];

            //$this->load->view('templates/header');
            $this->load->view('requestitems/view', $data);
           // $this->load->view('templates/footer');

        }

    }