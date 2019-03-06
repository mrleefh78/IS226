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
               
                'supplier_name' => $this->input->post('supplier_name'),
                'contact_person' => $this->input->post('contact_person'),
                'address' => $this->input->post('address'),
                'contact_no' => $this->input->post('contact_no'),
                'email' => $this->input->post('email'),
                'website' => $this->input->post('website'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            return $this->db->insert('lkpsuppliers',$data);
        }

        public function update_supplier(){
            $id = $this->input->post('supplier_id');

            $data = array(
               
                'supplier_name' => $this->input->post('supplier_name'),
                'contact_person' => $this->input->post('contact_person'),
                'address' => $this->input->post('address'),
                'contact_no' => $this->input->post('contact_no'),
                'email' => $this->input->post('email'),
                'website' => $this->input->post('website'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('supplier_id', $id);
            return $this->db->update('lkpsuppliers',$data);
        }

        public function delete_supplier($id){
            $this->db->where('supplier_id', $id);
            $this->db->delete('lkpsuppliers');
            return true;
        }
        
    
    }