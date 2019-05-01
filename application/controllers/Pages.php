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
                         redirect ('Pages/view/');

                    } else {  
                       
                    redirect ('Pages/checkLogin');
                           
                    }
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