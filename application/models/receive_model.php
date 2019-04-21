<?php
    class Receive_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

        public function get_receive($id = FALSE) {
            if ($id === FALSE){
                $query =  $this->db->get('txn_receive');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('txn_receive',array('receive_id' => $id));
            return $query ->row_array();
        }
        
        public function create_receive(){
            $data = array(
               
                'receive_date' => $this->input->post('receive_date'),
                'po_id' => $this->input->post('po_id'),
                'supplier_id' => $this->input->post('supplier_id'),
                'receive_by' => $this->input->post('receive_by'),
                'remarks' => $this->input->post('remarks'),
                // 'status' => $this->input->post('status'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            return $this->db->insert('txn_receive',$data);
        }

  
        public function update_receive(){
            $id = $this->input->post('receive_id');

            $data = array(
               
                'receive_date' => $this->input->post('receive_date'),
                'po_id' => $this->input->post('po_id'),
                'supplier_id' => $this->input->post('supplier_id'),
                'receive_by' => $this->input->post('receive_by'),
                'remarks' => $this->input->post('remarks'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('receive_id', $id);
            return $this->db->update('txn_receive',$data);
        }         

        public function delete_receive($id){
            $this->db->where('receive_id', $id);
            $this->db->delete('txn_receive');
            return true;
        }
        
       //items

       public function get_receive_items($po_id = FALSE) {
        if ($req_id === FALSE){
            $query =  $this->db->get('txn_receive_items');
            return $query ->result_array();
        }

        $query =  $this->db->get_where('txn_receive_items',array('receive_id' => $po_id));
        return $query ->row_array();
    }
    
    public function create_receive_item(){
        $data = array(
           
            'receive_id' => $this->input->post('receive_id'),
            'item_id' => $this->input->post('item_id'),
            'quantity' => $this->input->post('quantity'),
            'uom' => $this->input->post('uom'),
            'updated_by' => 'test',
            'updated_date' => date('Y-m-d H:i:s'),
            'created_by' => 'test',
            'created_date' => date('Y-m-d H:i:s')

        );

        return $this->db->insert('txn_receive_items',$data);
    }


    public function update_receive_item(){
        $id = $this->input->post('id');

        $data = array(
           
            'receive_id' => $this->input->post('receive_id'),
            'item_id' => $this->input->post('item_id'),
            'quantity' => $this->input->post('quantity'),
            'uom' => $this->input->post('uom'),
            'updated_by' => 'test',
            'updated_date' => date('Y-m-d H:i:s'),
            'created_by' => 'test',
            'created_date' => date('Y-m-d H:i:s')

        );

        $this->db->where('id', $id);
        return $this->db->update('txn_receive_items',$data);
    }         

    public function delete_receive_item($id){
        $this->db->where('receive_id', $id);
        $this->db->delete('txn_receive_items');
        return true;
    }

    public function delete_po_item_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete('txn_receive_items');
        return true;
    }
        
    }