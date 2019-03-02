<?php
    class Supplier_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

        public function get_suppliers($supplier_id = FALSE) {
            if ($supplier_id === FALSE){
                $query =  $this->db->get('lkpsuppliers');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('lkpsuppliers',array('supplier_id' => $supplier_id));
            return $query ->row_array();

        }

        public function create_supplier(){
            //$supplier_id = url_title($this->input->supplier('supplier_id'));

            $data = array(
               
                'supplier_name' => $this->input->suppliers('supplier_name'),
                'contact_person' => $this->input->suppliers('contact_person'),
                'address' => $this->input->suppliers('address'),
                'contact_no' => $this->input->suppliers('contact_no'),
                'email' => $this->input->suppliers('email'),
                'website' => $this->input->suppliers('website')

            );

            return $this->db->insert('lkpsuppliers',$data);
        }
        
    
    }