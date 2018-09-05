<?php
    class BE_Controller extends MY_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function load_page($page = '' , $data){
			$this->load->view('backend/templates/header', $data);
			$this->load->view($page, $data);
			$this->load->view('backend/templates/footer', $data);
        }
    }