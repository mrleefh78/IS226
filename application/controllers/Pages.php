<?php

    class Pages extends CI_Controller {

       
        public function index(){

           // $this->load->view('templates/header_login');
            //$this->load->view("pages/login.php");
           
        }

        public function register_view(){

            $this->load->view('templates/header');            
            $this->load->view("pages/register.php");           
            $this->load->view('templates/footer');

        }

        public function register()
            {
                $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[50]');
                $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[50]');

                $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[users.user_email]');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
                $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5');

                
                
                $data['title'] = 'Register';
                
                if ($this->form_validation->run() === FALSE)
                {            
                    $this->load->view('templates/header', $data);
                    $this->load->view('pages/register');
                    $this->load->view('templates/footer');
         
                }
                else
                {
                    $this->load->model('user_model');   
                    if ($this->user_model->set_user())
                    {                             
                        $this->session->set_flashdata('msg_success','Registration Successful!');
                        redirect('pages/register');            
                    }
                    else
                    {                
                        $this->session->set_flashdata('msg_error','Error! Please try again later.');
                        redirect('pages/register');
                    }
                }
            }
        
        public function checkLogin(){
       

            $this->form_validation->set_rules('email', 'Email','required');
            $this->form_validation->set_rules('password', 'Password','required');
               
        
            if ($this->form_validation->run() === FALSE){               

                 $this->load->view("pages/login.php");      

            }else{

                  $this->load->model('user_model');   
                  $check = $this->user_model->login_user();

  
                    if ($check)  
                    {  
                         redirect ('pages/view/');

                    } else {  
                       
                    redirect ('pages/checkLogin');
                           
                    }
                }

        }


       
        
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
                
            }
            
            $data['title'] = ucfirst($page);
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');

        }
    }