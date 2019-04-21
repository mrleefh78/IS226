<?php

    class Requests extends CI_Controller {
        public function index(){
            
            $data['title'] = 'List of Requests';
            $data['requests'] =  $this->request_model->get_requests();
            $this->load->view('templates/header');
            $this->load->view('requests/index', $data);
            $this->load->view('templates/footer');

        }

    }