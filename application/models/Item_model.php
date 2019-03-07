<?php
    class Item_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

        public function get_items($item_id = FALSE) {
            if ($item_id === FALSE){
                $query =  $this->db->get('lkpitem');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('lkpitem',array('item_id' => $item_id));
            return $query ->row_array();

        }

        public function get_itemclass($item_id = FALSE) {
            if ($item_id === FALSE){
                $query =  $this->db->get('lkpitemclass');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('lkpitemclass',array('item_id' => $item_id));
            return $query ->row_array();

        }

        public function create_item(){
            //$supplier_id = url_title($this->input->supplier('supplier_id'));

            $data = array(
               
                'item_name' => $this->input->post('item_name'),
                'item_class_id' => $this->input->post('item_class'),
                'item_sub_class_id' => $this->input->post('item_sub'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')
               
                
            );

            return $this->db->insert('lkpitem',$data);
        }

        public function create_itemclass(){
     
            $data = array(
               
                'item_name' => $this->input->post('item_name'),
              
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')
               
                
            );

            return $this->db->insert('lkpitemclass',$data);
        }

        public function update_item(){
            $id = $this->input->post('item_id');

            $data = array(
               
                'item_name' => $this->input->post('item_name'),
                'item_class_id' => $this->input->post('item_class'),
                'item_sub_class_id' => $this->input->post('item_sub'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('item_id', $id);
            return $this->db->update('lkpitem',$data);
        }

         public function update_itemclass(){
            $id = $this->input->post('item_id');

            $data = array(
               
                'item_name' => $this->input->post('item_name'),
                
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('item_id', $id);
            return $this->db->update('lkpitemclass',$data);
        }

        public function delete_item($id){
            $this->db->where('item_id', $id);
            $this->db->delete('lkpitem');
            return true;
        }

        public function delete_itemclass($id){
            $this->db->where('item_id', $id);
            $this->db->delete('lkpitemclass');
            return true;
        }
        
    
    }