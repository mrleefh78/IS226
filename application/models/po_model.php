<?php
    class PO_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

        public function get_po($id = FALSE) {
            if ($id === FALSE){
                $query =  $this->db->get('vwpo');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('vwpo',array('po_id' => $id));
            return $query ->row_array();
        }
        
        public function create_po(){
            $data = array(
               
                'po_date' => $this->input->post('po_date'),
                'pr_id' => $this->input->post('pr_id'),
                'po_by' => $this->input->post('po_by'),
                'authorize_by' => $this->input->post('authorize_by'),
                'remarks' => $this->input->post('remarks'),
                'supplier_id' => $this->input->post('supplier_id'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            return $this->db->insert('txn_po',$data);
        }

  
        public function update_po(){
            $id = $this->input->post('po_id');

            $data = array(
               
                'po_date' => $this->input->post('po_date'),
                'pr_id' => $this->input->post('pr_id'),
                'po_by' => $this->input->post('po_by'),
                'authorize_by' => $this->input->post('authorize_by'),
                'remarks' => $this->input->post('remarks'),
                'supplier_id' => $this->input->post('supplier_id'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('po_id', $id);
            return $this->db->update('txn_po',$data);
        }         

        public function delete_po($id){
            $this->db->where('po_id', $id);
            $this->db->delete('txn_po');
            return true;
        }
        
       //items

       public function get_po_items($po_id = FALSE) {
        if ($req_id === FALSE){
            $query =  $this->db->get('txn_po_items');
            return $query ->result_array();
        }

        $query =  $this->db->get_where('txn_po_items',array('po_id' => $po_id));
        return $query ->row_array();
    }
    
    public function create_po_item(){
        $data = array(
           
            'po_id' => $this->input->post('po_id'),
            'item_id' => $this->input->post('item_id'),
            'quantity' => $this->input->post('quantity'),
            'uom' => $this->input->post('uom'),
            'updated_by' => 'test',
            'updated_date' => date('Y-m-d H:i:s'),
            'created_by' => 'test',
            'created_date' => date('Y-m-d H:i:s')

        );

        return $this->db->insert('txn_po_items',$data);
    }


    public function update_po_item(){
        $id = $this->input->post('id');

        $data = array(
           
            'po_id' => $this->input->post('po_id'),
            'item_id' => $this->input->post('item_id'),
            'quantity' => $this->input->post('quantity'),
            'uom' => $this->input->post('uom'),
            'updated_by' => 'test',
            'updated_date' => date('Y-m-d H:i:s'),
            'created_by' => 'test',
            'created_date' => date('Y-m-d H:i:s')

        );

        $this->db->where('id', $id);
        return $this->db->update('txn_po_items',$data);
    }         

    public function delete_po_item($id){
        $this->db->where('po_id', $id);
        $this->db->delete('txn_po_items');
        return true;
    }

    public function delete_po_item_by_id($id){
        $this->db->where('id', $id);
        $this->db->delete('txn_po_items');
        return true;
    }

    public function update_req_entry(){
          
        //  $id = $this->input->post('req_id');
          $data = array(
             
              'pr_id' => $this->input->post('pr_id'),
              'status' => $this->input->post('status'),
              'updated_by' => 'test',
              'updated_date' => date('Y-m-d H:i:s'),
              'created_by' => 'test',
              'created_date' => date('Y-m-d H:i:s')

          );

          $this->db->where('pr_id', $this->input->post('pr_id'));
          return $this->db->update('txn_pr',$data);
      }   

    public function get_reqlistDrop() { 
        // $result = $this->db-> select('req_id, Concat(req_id, "-", req_by, "-", DATE_FORMAT(req_date, "%Y-%m-%d")) as description ') -> get('vwrequest') -> result_array(); 
         $result = $this->db-> select('pr_id, Concat(req_no, "-", req_by, "-", DATE_FORMAT(req_date, "%Y-%m-%d")) as description ') -> get_where('vwpr',array('status !=' => 'Approved'))-> result_array(); 
  
         $items = array(); 
         foreach($result as $r) { 
             $items[$r['pr_id']] = $r['description']; 
         } 
         $items[''] = 'Select PR Reference'; 
         return $items; 
         } 

         public function get_reqlistDropEdit() { 
            // $result = $this->db-> select('req_id, Concat(req_id, "-", req_by, "-", DATE_FORMAT(req_date, "%Y-%m-%d")) as description ') -> get('vwrequest') -> result_array(); 
             $result = $this->db-> select('pr_id, Concat(req_no, "-", req_by, "-", DATE_FORMAT(req_date, "%Y-%m-%d")) as description ') -> get_where('vwpr',array('1=' => '1'))-> result_array(); 
      
             $items = array(); 
             foreach($result as $r) { 
                 $items[$r['pr_id']] = $r['description']; 
             } 
             $items[''] = 'Select PR Reference'; 
             return $items; 
             } 

         public function get_supplistDrop() { 
            // $result = $this->db-> select('req_id, Concat(req_id, "-", req_by, "-", DATE_FORMAT(req_date, "%Y-%m-%d")) as description ') -> get('vwrequest') -> result_array(); 
             $result = $this->db-> select('supplier_id, supplier_name as description ') -> get_where('lkpsuppliers',array('1=' => '1'))-> result_array(); 
      
             $items = array(); 
             foreach($result as $r) { 
                 $items[$r['supplier_id']] = $r['description']; 
             } 
             $items[''] = 'Select Supplier'; 
             return $items; 
             } 

         
        
    }