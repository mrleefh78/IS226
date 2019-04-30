<?php
    class Request_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

        public function get_requests($req_id = FALSE) {
            if ($req_id === FALSE){
                $query =  $this->db->get('vwrequest');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('vwrequest',array('req_id' => $req_id));
            return $query ->row_array();
        }
        
        public function create_request(){
            $data = array(
               
                'req_date' => $this->input->post('req_date'),
                'location_id' => $this->input->post('location_id'),
                'dept_id' => $this->input->post('dept_id'),
                'req_by' => $this->input->post('req_by'),
                'req_notes' => $this->input->post('req_notes'),
                'authorize_by' => $this->input->post('authorize_by'),
                'remarks' => $this->input->post('remarks'),
                'status' => $this->input->post('status'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            return $this->db->insert('txn_request',$data);
        }

  
        public function update_request(){
            $id = $this->input->post('req_id');

            $data = array(
               
                'req_date' => $this->input->post('req_date'),
                'location_id' => $this->input->post('location_id'),
                'dept_id' => $this->input->post('dept_id'),
                'req_by' => $this->input->post('req_by'),
                'req_notes' => $this->input->post('req_notes'),
                'authorize_by' => $this->input->post('authorize_by'),
                'remarks' => $this->input->post('remarks'),
                'status' => $this->input->post('status'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('req_id', $id);
            return $this->db->update('txn_request',$data);
        }         

        public function update_request_stat(){
            $id = $this->input->post('req_id');

            $data = array(
               
                'status' => $this->input->post('status'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('req_id', $id);
            return $this->db->update('txn_request',$data);
        }    

        public function delete_request($id){
            $this->db->where('req_id', $id);
            $this->db->delete('txn_request');
            return true;
        }
        
       //items

       public function get_request_items($req_id = FALSE) {
        if ($req_id === FALSE){
            $query =  $this->db->get('vwrequestitems');
         
            return $query ->result_array();
        }

        
        $query =  $this->db->get_where('vwrequestitems',array('req_id' => $req_id));
        return $query ->result_array();
    }

    public function get_request_items_byid($req_id = FALSE) {
        if ($req_id === FALSE){
            $query =  $this->db->get('vwrequestitems');
         
            return $query ->result_array();
        }

        
        $query =  $this->db->get_where('vwrequestitems',array('id' => $req_id));
        return $query ->row_array();
    }

    public function get_itemlistDrop() { 
        $result = $this->db-> select('item_id,item_name') -> get('lkpitem') -> result_array(); 
 
        $items = array(); 
        foreach($result as $r) { 
            $items[$r['item_id']] = $r['item_name']; 
        } 
        $items[''] = 'Select Item Class'; 
        return $items; 
        } 
    
    public function create_request_item(){
        $data = array(
           
            'req_id' => $this->input->post('req_id'),
            'item_id' => $this->input->post('item_id'),
            'quantity' => $this->input->post('quantity'),
            'uom' => $this->input->post('uom'),
            'updated_by' => 'test',
            'updated_date' => date('Y-m-d H:i:s'),
            'created_by' => 'test',
            'created_date' => date('Y-m-d H:i:s')

        );

        return $this->db->insert('txn_request_items',$data);
    }


    public function update_request_item(){
        $id = $this->input->post('id');

        $data = array(
           
            'req_id' => $this->input->post('req_id'),
            'item_id' => $this->input->post('item_id'),
            'quantity' => $this->input->post('quantity'),
            'uom' => $this->input->post('uom'),
            'updated_by' => 'test',
            'updated_date' => date('Y-m-d H:i:s'),
            'created_by' => 'test',
            'created_date' => date('Y-m-d H:i:s')

        );

        $this->db->where('id', $id);
        return $this->db->update('txn_request_items',$data);
    }         

    public function delete_request_item($id){
        $this->db->where('req_id', $id);
        $this->db->delete('txn_request_items');
        return true;
    }

    public function delete_request_item_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete('txn_request_items');
        return true;
    }
        
    }