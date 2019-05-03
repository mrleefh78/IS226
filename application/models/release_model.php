<?php
    class Release_model extends CI_Model{
        public function _construct(){
            $this->load->database();
        }

        public function get_data($id = FALSE) {
            if ($id === FALSE){
                $query =  $this->db->get('vwrelease');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('vwrelease',array('release_id' => $id));
            return $query ->row_array();
        }
        
        public function create_entry(){
            $data = array(
               
               
                'req_id' => $this->input->post('req_id'),
                'req_date' => $this->input->post('req_date'),
                // 'location_id' => $this->input->post('location_id'),
                // 'dept_id' => $this->input->post('dept_id'),
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

            return $this->db->insert('txn_release',$data);

          
        }
        public function get_requestsByStat($stat = FALSE) {
            if ($stat === FALSE){
                $query =  $this->db->get('vwrequest');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('vwrequest',array('status' => 'New'));
            return $query ->row_array();
        }
  
        public function update_entry(){

            

            $id = $this->input->post('release_id');
            

            $data = array(
               
                'release_id' => $this->input->post('release_id'),
                'req_id' => $this->input->post('req_id'),
                'req_date' => $this->input->post('req_date'),
                // 'location_id' => $this->input->post('location_id'),
                // 'dept_id' => $this->input->post('dept_id'),
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

           
            $this->db->where('release_id', $id);
            return $this->db->update('txn_release',$data);
        }     
        
        public function update_req_entry(){
          
          //  $id = $this->input->post('req_id');
            $data = array(
               
                'req_id' => $this->input->post('req_id'),
                'status' => $this->input->post('status'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('req_id', $this->input->post('req_id'));
            return $this->db->update('txn_request',$data);
        }    

        public function delete_entry($id){
            $this->db->where('release_id', $id);
            $this->db->delete('txn_release');
            return true;
        }

        public function get_reqlistDrop() { 
           // $result = $this->db-> select('req_id, Concat(req_id, "-", req_by, "-", DATE_FORMAT(req_date, "%Y-%m-%d")) as description ') -> get('vwrequest') -> result_array(); 
            $result = $this->db-> select('req_id, Concat(req_id, "-", req_by, "-", DATE_FORMAT(req_date, "%Y-%m-%d")) as description ') -> get_where('vwrequest',array('status !=' => 'Approved'))-> result_array(); 
     
            $items = array(); 
            foreach($result as $r) { 
                $items[$r['req_id']] = $r['description']; 
            } 
            $items[''] = 'Select Request Reference'; 
            return $items; 
            } 
        
      
        
    }