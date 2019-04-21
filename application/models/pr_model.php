<?php
    class PR_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

        public function get_pr($id = FALSE) {
            if ($id === FALSE){
                $query =  $this->db->get('vwpr');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('vwpr',array('pr_id' => $id));
            return $query ->row_array();
        }
        
        public function create_pr(){
            $data = array(
               
                'req_date' => $this->input->post('req_date'),
                'req_no' => $this->input->post('req_no'),
                'location_id' => $this->input->post('location_id'),
                'dept_id' => $this->input->post('dept_id'),
                'req_by' => $this->input->post('req_by'),
                'req_notes' => $this->input->post('req_notes'),
                'authorize_by' => $this->input->post('authorize_by'),
                'remarks' => $this->input->post('remarks'),
                // 'status' => $this->input->post('status'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            return $this->db->insert('txn_pr',$data);
        }

  
        public function update_pr(){
            $id = $this->input->post('pr_id');

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

            $this->db->where('pr_id', $id);
            return $this->db->update('txn_pr',$data);
        }         

        public function delete_pr($id){
            $this->db->where('pr_id', $id);
            $this->db->delete('txn_pr');
            return true;
        }
        
       //items

       public function get_pr_items($pr_id = FALSE) {
        if ($req_id === FALSE){
            $query =  $this->db->get('txn_pr_items');
            return $query ->result_array();
        }

        $query =  $this->db->get_where('txn_pr_items',array('pr_id' => $pr_id));
        return $query ->row_array();
    }
    
    public function create_pr_item(){
        $data = array(
           
            'pr_id' => $this->input->post('pr_id'),
            'item_id' => $this->input->post('item_id'),
            'quantity' => $this->input->post('quantity'),
            'uom' => $this->input->post('uom'),
            'updated_by' => 'test',
            'updated_date' => date('Y-m-d H:i:s'),
            'created_by' => 'test',
            'created_date' => date('Y-m-d H:i:s')

        );

        return $this->db->insert('txn_pr_items',$data);
    }


    public function update_pr_item(){
        $id = $this->input->post('id');

        $data = array(
           
            'pr_id' => $this->input->post('pr_id'),
            'item_id' => $this->input->post('item_id'),
            'quantity' => $this->input->post('quantity'),
            'uom' => $this->input->post('uom'),
            'updated_by' => 'test',
            'updated_date' => date('Y-m-d H:i:s'),
            'created_by' => 'test',
            'created_date' => date('Y-m-d H:i:s')

        );

        $this->db->where('id', $id);
        return $this->db->update('txn_pr_items',$data);
    }         

    public function delete_pr_item($id){
        $this->db->where('pr_id', $id);
        $this->db->delete('txn_pr_items');
        return true;
    }

    public function delete_pr_item_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete('txn_pr_items');
        return true;
    }
        
    }