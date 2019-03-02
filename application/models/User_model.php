<?php
class User_model extends CI_model{
 

public function login_user(){


	$arr ['user_email'] =  $this->input->post('email');
    $arr ['user_password']  = md5($this->input->post('password'));
 
    return $this->db->get_where('users', $arr)->row();  
      
}
 
 
}
 
 
?>