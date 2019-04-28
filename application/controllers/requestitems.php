<?php

    class Requestitems extends CI_Controller {
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
            $this->form_validation->set_rules('item_id','item_id','item_id');
            $this->form_validation->set_rules('quantity','quantity','quantity');
            $this->form_validation->set_rules('uom','uom','uom');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('requestitems/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->requestitems_model->create_request())
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

        public function delete($id){
            $this->request_model->delete_request($id);
            redirect('requests');
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