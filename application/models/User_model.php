<?php
class User_model extends CI_model{
 
    public function __construct()
        {

            parent::__construct();
            $this->load->database();
        }
        
    public function login_user(){


    	$arr ['user_email'] =  $this->input->post('email');
        $arr ['user_password']  = md5($this->input->post('password'));
     
        return $this->db->get_where('users', $arr)->row();  
          
    }


    public function set_user($id = 0)
    {
        $data = array(
            'user_name' => $this->input->post('username'),
            'first_name' => $this->input->post('firstname'),
            'last_name' => $this->input->post('lastname'),
            'user_email' => $this->input->post('email'),
            'user_password' => $this->input->post('password'),
            'updated_date' => date('Y-m-d H:i:s'),
            'created_date' => date('Y-m-d H:i:s')
        );
            
        if ($id == 0) {
            return $this->db->insert('users', $data);
        } else {
            $this->db->where('user_id', $id);
            return $this->db->update('users', $data);
        }
    }

     
    }
     
 
?>