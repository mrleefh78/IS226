<?php
    class Receive_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

        public function get_receive($id = FALSE) {
            if ($id === FALSE){
                $query =  $this->db->get('vwreceive');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('vwreceive',array('receive_id' => $id));
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

    public function get_reqlistDrop() { 
        // $result = $this->db-> select('req_id, Concat(req_id, "-", req_by, "-", DATE_FORMAT(req_date, "%Y-%m-%d")) as description ') -> get('vwrequest') -> result_array(); 
         $result = $this->db-> select('po_id, pr_ref as description ') -> get_where('vwpo',array('status =' => 'Approved'))-> result_array(); 
  
         $items = array(); 
         foreach($result as $r) { 
             $items[$r['po_id']] = $r['description']; 
         } 
         $items[''] = 'Select PR Reference'; 
         return $items; 
         } 

         public function update_inv_items(){
          
            //  $id = $this->input->post('req_id');
          //  $data = ' lkpitem B inner join  txn_request_items A on A.item_id = B.item_id set B.quantity = B.quantity -A.quantity where A.req_id = ?';
  
            //   $this->db->where('req_id', $this->input->post('req_id'));

             // $sql = "UPDATE table SET column = ? WHERE id = ?";
//$this->db->query($sql, array($value, $id));

              return $this->db->query('update lkpitem B inner join  txn_pr_items A on A.item_id = B.item_id inner join txn_po A2 on A.pr_id = A2.pr_id set B.quantity = B.quantity + A.quantity where A2.po_id = ?', $this->input->post('po_id'));
          }   
        
    }