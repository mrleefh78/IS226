<?php

    class Pages extends CI_Controller {

       
        public function index(){

           // $this->load->view('templates/header_login');
            //$this->load->view("pages/login.php");
           
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


        public function register_view(){
        
            $this->load->view("pages/register.php");
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