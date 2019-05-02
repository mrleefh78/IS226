<?php

    class Pages extends CI_Controller {

       
        public function __construct()
    {
        parent::__construct();
      
    }
        public function index(){

           // $this->load->view('templates/header_login');
            //$this->load->view("pages/login.php");
           
        }

       

         public function user_search()
    {

        $data['title'] = 'Search Users';
         $data['users'] =  $this->user_model->get_users();    
        $this->load->view('templates/header');    
        $this->load->view('pages/register_view', $data);
        $this->load->view('templates/footer');
            }

         public function search($user_id = NULL)
    {
        $data2['cari'] = $this->user_model->cariTest($user_id);
      
            $this->load->view('templates/header');
            $this->load->view('pages/result', $data2);   
            $this->load->view('templates/footer');
        }

        
        public function checkLogin(){
       

            $this->form_validation->set_rules('email', 'Email','required');
            $this->form_validation->set_rules('password', 'Password','required');
               
        
            if ($this->form_validation->run() === FALSE){               

                 $this->load->view("Pages/login.php");      

            }else{

                  $this->load->model('user_model');   
                  $check = $this->user_model->login_user();

  
                    if ($check)  
                    {  
                          $where = array(
                            'user_email' => $this->input->post('email'), 
                            'user_password' => md5($this->input->post('password')), 
                          );

                        $result = $this->user_model->login_user1($where);
                        if($result > 0 AND is_object($result)){
                          // User login 
                          $session_data = array(
                            'EMAIL'       => $where['user_email'],
                            'USER_ID'     => $result->user_id,
                            'FULL_NAME'   => $result->user_name,
                           
                          );
                          $this->session->set_userdata($session_data);
                          //return redirect('Admin');
                            redirect ('Pages/view/');

                            }

                    } else {  
                       
                    redirect ('Pages/checkLogin');
                           
                    }
                }

        }

        
        public function changePass(){

        $this->form_validation->set_rules('old_pass', 'Old Password', 'trim|required|max_length[150]');
        $this->form_validation->set_rules('new_pass', 'New Password', 'trim|required|max_length[150]');
        $this->form_validation->set_rules('rep_new_pass', 'Repeat Password', 'trim|required|max_length[150]|matches[new_pass]');

        if($this->form_validation->run() == false){

            $data['title'] = "Change Password";
          
             $this->load->view('templates/header');
            $this->load->view('pages/change_password', $data);   
            $this->load->view('templates/footer');
        }else{

            // Update Data
            $data = array(
                'user_password' => md5($this->input->post('new_pass')),
                'updated_date' => date('Y-m-d H:i:s')
            );
            // Check Old {Password}
            $result = $this->user_model->Check_Old_Password($this->session->userdata('USER_ID'), md5($this->input->post('old_pass')));
            if($result > 0 AND $result === true ){
                // updata user data
                $result = $this->user_model->Update_User_Data($this->session->userdata('USER_ID'), $data);
                if($result > 0){
                    $this->session->set_flashdata('success_msg', 'User Password Change.');
                    return redirect('pages/ChangePass');
                }else{
                    $this->session->set_flashdata('error_msg', '<b>Error: </b>User Password not Change.');
                    return redirect('pages/ChangePass');
                }
            }else{
                $this->session->set_flashdata('error_msg', '<b>Error: </b>User Old Password not Match.');
                return redirect('pages/ChangePass');
            }
        }
        
    }


        public function reset_password_email(){

             $this->load->view('pages/reset_password_email');

        }


        public function email_reset_password_validation(){

           $this->form_validation->set_rules('email', 'Email','required|valid_email');

              if ($this->form_validation->run() === TRUE){               

                $reset_key = md5(uniqid());
                $this->load->model('user_model');   
               if ($this->user_model->update_reset_key($reset_key))
               {

                echo "send email later";
               }
               else
               {
                echo "Error";
               }

            } else
               {

               
                $this->load->view('pages/reset_password_email');
           }

         }


        public function register_view(){
            $data['title'] = 'List of Users';
           
            $data['users'] =  $this->user_model->get_users();
            $this->load->view('templates/header');
            $this->load->view('pages/register_index', $data);
            $this->load->view('templates/footer');

        }

        public function user_view($user_id = NULL){
            
           
            $data['user'] =  $this->user_model->get_users($user_id);
            if(empty($data['user'])){
                show_404();
            }
            $data['title'] = $data['user']['user_id'];

            $this->load->view('templates/header');
            $this->load->view('pages/register_view', $data);
            $this->load->view('templates/footer');

        }

        public function create(){
            
            //$data['title'] = 'User Registration';

         $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|alpha|min_length[3]|max_length[50]');

             $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha|min_length[3]|max_length[50]');
                $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[50]');

                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.user_email]');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
                
                
           
            if( $this->form_validation->run()===FALSE){
                 $options['options'] = array(
                 '0'  => 'Please select account type',
                 'Admin'  => 'Admin',
                 'User'  => 'User'                
                  
                );
                $this->load->view('templates/header');
                $this->load->view('pages/register_create', $options);
                $this->load->view('templates/footer');

            }
            else {
                //$this->supplier_model->create_supplier();
                // $this->load->view('suppliers/success');
                //redirect('suppliers');

                if ($this->user_model->create_user())
                    {                             
                        $this->session->set_flashdata('msg_success','User added successfully!');
                                
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        
                    }

                    redirect('pages/register_view');

            }           

        }
        public function edit($user_id = NULL){
            $data['user'] =  $this->user_model->get_users($user_id );
            if(empty($data['user'])){
                show_404();
            }
            // $data['title'] = $data['supplier']['supplier_id'];
            $data['title'] = 'Update User';

            $this->load->view('templates/header');
            $this->load->view('pages/register_edit', $data);
            $this->load->view('templates/footer');
        }

        public function update($id){
            $this->user_model->update_user($id);
            redirect('pages/register_view');
        }

        public function delete($id){
            $this->user_model->delete_user($id);
            redirect('pages/register_view');
        }
    
       
        
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
                
            }

            if ($page == 'login'){

            redirect ('pages/checkLogin');
            }else{
            
            $data['title'] = ucfirst($page);
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
            }
        }
    }