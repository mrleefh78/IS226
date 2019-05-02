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


   public function cariTest($user_id = FALSE)
    {
        $search = $this->input->GET('search', TRUE);
       $data = $this->db->query("SELECT * from users where first_name like '%$search%' ");
   
       return $data->result();


    }


    public function login_user1($where){

        $query = $this->db->where($where)
                        ->get('users');
        if( $query->num_rows() > 0)
            return $query->row();
        else
            return false;

    }
    
    public function Update_User_Data($user_id, $data)
    {
        $this->db->set($data);
        $this->db->where('user_id', $user_id);
        $this->db->update('users');
        if($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function Check_Old_Password($user_id, $old_password){

        //$this->db->where('is_active', 1);
        $this->db->where('user_id', $user_id);
        $this->db->where('user_password', $old_password);
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
            return true;
        else
            return false;
    }




        public function get_users($user_id = FALSE) {
            if ($user_id === FALSE){
                $query =  $this->db->get('users');
                return $query ->result_array();
            }

            $query =  $this->db->get_where('users',array('user_id' => $user_id));
            return $query ->row_array();

    }

     
    
 
    public function create_user(){
           

            $data = array(
               
                'user_name' => $this->input->post('user_name'),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),                
                'user_email' => $this->input->post('email'),
                'user_password' => md5($this->input->post ('password')),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            return $this->db->insert('users',$data);
        }

     



     public function update_user(){
            $id = $this->input->post('user_id');
            //table field | textbox names

            $data = array(
               
                'user_name' => $this->input->post('user_name'),
                'user_password' => md5($this->input->post ('password')),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),                
                'user_email' => $this->input->post('email'),
                'updated_by' => 'test',
                'updated_date' => date('Y-m-d H:i:s'),
                'created_by' => 'test',
                'created_date' => date('Y-m-d H:i:s')

            );

            $this->db->where('user_id', $id);
            return $this->db->update('users',$data);
        }


        public function delete_user($id){
            $this->db->where('user_id', $id);
            $this->db->delete('users');
            return true;
        
        
    
    }
}
 
?>