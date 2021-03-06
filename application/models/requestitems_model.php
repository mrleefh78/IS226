<?php
    class Requestitems_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

                
       //items

       public function get_request_items($req_id = FALSE) {
        if ($req_id === FALSE){
            $query =  $this->db->get('vwrequestitems');
         
            return $query ->result_array();
        }

        
        $query =  $this->db->get_where('vwrequestitems',array('req_id' => $req_id));
        return $query ->row_array();
    }
    
    public function create_request(){
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