<?php
    class Item_model extends CI_Model{
        public function _construct(){
            parent::__construct();     
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

        public function get_all_items($item_id = FALSE) {
            if ($item_id === FALSE){
                $query =  $this->db->get('vwitems');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('lkpitem',array('item_id' => $item_id));
            return $query ->row_array();

        }
        
        public function create_item(){
            $data = array(
               
                'item_name' => $this->input->post('item_name'),              
                'uom' => $this->input->post('uom'),
                'reorder_level' => $this->input->post('reorder'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity'),
                'item_class_id' => $this->input->post('item_class'),
                'item_sub_class_id' => $this->input->post('item_sub'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')             
                
            );

            return $this->db->insert('lkpitem',$data);
        }

       
        public function update_item(){
            $id = $this->input->post('item_id');

            $data = array(
               
                'item_name' => $this->input->post('item_name'),
                'uom' => $this->input->post('uom'),
                'reorder_level' => $this->input->post('reorder'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity'),
                //'item_class_id' => $this->input->post('item_class'),
                //'item_sub_class_id' => $this->input->post('item_sub'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('item_id', $id);
            return $this->db->update('lkpitem',$data);
        }

        
        public function delete_item($id){
            $this->db->where('item_id', $id);
            $this->db->delete('lkpitem');
            return true;
        }

        //item class model
        
        public function get_itemclass($item_id = FALSE) {
                if ($item_id === FALSE){
                    $query =  $this->db->get('lkpitemclass');
                    return $query ->result_array();
                }

                $query =  $this->db->get_where('lkpitemclass',array('item_id' => $item_id));
                return $query ->row_array();

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
        public function delete_itemclass($id){
            $this->db->where('item_id', $id);
            $this->db->delete('lkpitemclass');
            return true;
        }

        //item subclass model
        
        public function get_itemsubclass($item_id = FALSE) {
                if ($item_id === FALSE){
                    $query =  $this->db->get('lkpitemsubclass');
                    return $query ->result_array();
                }

                $query =  $this->db->get_where('lkpitemsubclass',array('item_id' => $item_id));
                return $query ->row_array();

            }

        public function create_itemsubclass(){
     
            $data = array(
               
                'item_name' => $this->input->post('item_name'),
              
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')                
            );

            return $this->db->insert('lkpitemsubclass',$data);
        }
        
        public function update_itemsubclass(){
            $id = $this->input->post('item_id');

            $data = array(
               
                'item_name' => $this->input->post('item_name'),
                
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('item_id', $id);
            return $this->db->update('lkpitemsubclass',$data);
        }
        public function delete_itemsubclass($id){
            $this->db->where('item_id', $id);
            $this->db->delete('lkpitemsubclass');
            return true;
        }
        public function get_itemclassDrop() { 
            $result = $this->db-> select('item_id,item_name') -> get('lkpitemclass') -> result_array(); 
 
            $itemclass = array(); 
            foreach($result as $r) { 
                $itemclass[$r['item_id']] = $r['item_name']; 
                } 
            $itemclass[''] = 'Select Item Class'; 
            return $itemclass; 
        } 

        public function get_itemsubclassDrop() { 
            $result = $this->db-> select('item_id,item_name') -> get('lkpitemsubclass') -> result_array(); 
 
            $itemsub = array(); 
            foreach($result as $r) { 
                $itemsub[$r['item_id']] = $r['item_name']; 
            } 
            $itemsub[''] = 'Select Item Sub Class'; 
            return $itemsub; 
        } 
         public function get_itemclasseditDrop($item_id) { 


           if ($item_id === FALSE){
                    $query =  $this->db->get('lkpitem');
                    return $query ->result_array();
                }
                $query = $this->db-> select('item_id, Generic') ->get_where('vwitems',array('item_id' => $item_id)) -> result_array(); 
                 $itemclass = array();
                foreach( $query as $r) { 
                $itemclass[$r['item_id']] = $r['Generic']; 
                } 
               
                return $itemclass ;
            }


        public function get_itemsubclasseditDrop($item_id) { 
            if ($item_id === FALSE){
                    $query =  $this->db->get('lkpitem');
                    return $query ->result_array();
                }
                $query = $this->db-> select('item_id, Category') ->get_where('vwitems',array('item_id' => $item_id)) -> result_array(); 
                 $itemsub = array();
                foreach( $query as $r) { 
                $itemsub[$r['item_id']] = $r['Category']; 
                } 
               
                return $itemsub ;
            }

    }