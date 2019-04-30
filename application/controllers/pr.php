<?php

    class Pr extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of PR';
            $data['pr'] =  $this->pr_model->get_pr();
            $this->load->view('templates/header');
            $this->load->view('pr/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($pr_id = NULL){
            
           
            $data['pr'] =  $this->pr_model->get_pr($pr_id);
            if(empty($data['pr'])){
                show_404();
            }
            $data['title'] = $data['pr']['pr_id'];

            $this->load->view('templates/header');
            $this->load->view('pr/view', $data);
            $this->load->view('templates/footer');

        }

       

        public function create(){
            
            $data['title'] = 'Create Purchase Request';

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('req_date','req_date','required');
            $this->form_validation->set_rules('req_no','req_no','required');
            $this->form_validation->set_rules('location_id','location_id','required');
            $this->form_validation->set_rules('dept_id','dept_id','required');
            $this->form_validation->set_rules('req_by','req_by','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('pr/create', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->pr_model->create_pr())
                    {                             
                        $this->session->set_flashdata('msg_success','PR added successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('pr');

            }           

        }

       

        public function edit($pr_id = NULL){
            $data['pr'] =  $this->pr_model->get_pr($pr_id );
            $data['pritems'] =  $this->pr_model->get_pr_items($pr_id);
            if(empty($data['pr'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update PR';

            $this->load->view('templates/header');
            $this->load->view('pr/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->pr_model->update_pr($id);
            redirect('pr');
        }

        public function delete($id){
            $this->pr_model->delete_pr($id);
            redirect('pr');
        }


        public function additem($pr_id = NULL){
            $data['title'] = 'Add Items';
            $data['pr_id'] = $pr_id;
            $data['items'] = $this->pr_model->get_itemlistDrop(); 

            //$data['suppliers'] =  $this->supplier_model->get_suppliers();
            $this->form_validation->set_rules('item_id','item_id','required');
            $this->form_validation->set_rules('quantity','quantity','required');
            $this->form_validation->set_rules('uom','uom','required');
            // $this->form_validation->set_rules('address','address','required');
            // $this->form_validation->set_rules('contact_no','contact_no','required');

            if( $this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('pr/additem', $data);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');
                //$id ='requests/edit/' . $id;

                if ($this->pr_model->create_pr_item())
              
                    {                             
                        $this->session->set_flashdata('msg_success','Request created successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                // redirect('pr/edit/' .  $req_id);
                redirect('pr');

            }           


        }

        public function edititem($req_id = NULL){
            $data['request'] =  $this->pr_model->get_request_items_byid($req_id);
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

        public function deleteitem($id){
            
            $this->pr_model->delete_request_item_by_id($id);
            //$req_id = '1'
           // redirect('requests/edit/' . $req_id);
           redirect('requests');
          // redirect($_SERVER['REQUEST_URI'], 'refresh'); 

        }

        
    }