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

       // public function delete_supplier($id){
        //    $this->db->where('supplier_id', $id);
        //    $this->db->delete('lkpsuppliers');
       //     return true;
       // }
        

        // location model

        public function get_locations($location_id = FALSE) {
            if ($location_id === FALSE){
                $query =  $this->db->get('lkplocation');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('lkplocation',array('id' => $location_id));
            return $query ->row_array();

        }
        
        public function create_location(){
            $data = array(
               
                'id' => $this->input->post('id'),
                'description' => $this->input->post('description'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')                  

            );

            return $this->db->insert('lkplocation',$data);
        }
        
        public function update_location(){
            $id = $this->input->post('id');

            $data = array(
               
                'id' => $this->input->post('id'),
                'description' => $this->input->post('description'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')                   

            );

            $this->db->where('id', $id);
            return $this->db->update('lkplocation',$data);
        }
        
        public function delete_location($id){
            $this->db->where('id', $id);
            $this->db->delete('lkplocation');
            return true;
        }
        

        // department model

        public function get_departments($department_id = FALSE) {
            if ($department_id === FALSE){
                $query =  $this->db->get('lkpdepartment');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('lkpdepartment',array('id' => $department_id));
            return $query ->row_array();

        }
        
        public function create_department(){
            $data = array(
               
                'id' => $this->input->post('id'),
                'description' => $this->input->post('description'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')                  

            );

            return $this->db->insert('lkpdepartment',$data);
        }
        
        public function update_department(){
            $id = $this->input->post('id');

            $data = array(
               
                'id' => $this->input->post('id'),
                'description' => $this->input->post('description'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')                   

            );

            $this->db->where('id', $id);
            return $this->db->update('lkpdepartment',$data);
        }
        
        public function delete_department($id){
            $this->db->where('id', $id);
            $this->db->delete('lkpdepartment');
            return true;
        }

        
    }