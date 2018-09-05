<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends BE_Controller {
	var $base_url;
	var $css;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->base_url = $this->config->item('base_url');
		$css = $this->config->item('css');
		$this->load->model('Back_end');
	}

	public function index()
	{	
		if($this->session->userdata('log')){



			$data['url'] = $this->base_url;
			$data['dailyinfo'] = $this->Back_end->getTodayEntryAll();
			$data['css'] = "admin";
			$data['js'] = "admin";
			$data['title'] = "Admin";
			$data['solved'] = $this->Back_end->count_status('Solved');
			$data['monitor'] = $this->Back_end->count_status('Monitoring');
			$data['pending'] = $this->Back_end->count_status('Pending');
			$data['all'] = $this->Back_end->record_count();
			//echo "heo";

			$this->load_page('backend/search' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');     
	}



	public function newTest(){
		echo "Controller is working";
		return "hello again";
	}

    public function register(){
 
               
			if($this->session->userdata('log')){
				$data['url'] = $this->base_url;
				$data['css'] = "register";
				$data['js'] = "register";
				$data['title'] = "Register";
				//echo "heo";

				$this->load_page('backend/register' , $data);
			}else
				redirect($this->base_url.'Adim_login/', 'refresh');       

    }

    public function regbtn(){

        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');  
        if($this->form_validation->run()==FALSE){  

        }else{
            if($this->user_model->create_user()){
                  $this->session->set_flashdata('user_registered','User Has Been Registered');
                  redirect('home/index');
            }
        }
    }

	public function view($section = '')
	{
		if($this->session->userdata('log')){
			$data['url'] = $this->base_url;
			$temp = str_replace("_", " ", $section);
			$data['dailyinfo'] = $this->Back_end->getCartEntry($temp);
			$data['css'] = "view";
			$data['js'] = "view";
			$data['js2'] = "view";
			$data['title'] = $temp;

			$this->load_page('backend/view' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');
	}

	public function del($section = '',$id = ''){
		if($this->session->userdata('log')){
			$this->Back_end->delete_by_id($id);
			$data['url'] = $this->base_url;
			$temp = str_replace("%20", "_", $section);

			//$this->view($temp);
			redirect($this->base_url.'Admin/view/'.$temp);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');

	}

	public function details($id){
		if($this->session->userdata('log')){
			$data['url'] = $this->base_url;
			$data['info'] = $this->Back_end->get_by_id($id);
			$data['css'] = "details";
			$data['js'] = "details";
			$data['title'] = "details";
			$this->load_page('backend/details' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');
	}

	public function edit($id){
		if($this->session->userdata('log')){
			$data['url'] = $this->base_url;
			$data['info'] = $this->Back_end->get_by_id($id);
			$data['css'] = "edit";
			$data['js'] = "edit";
			$data['title'] = "Edit";
			$this->load_page('backend/edit' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');
	}

	public function submitted($id){
		if($this->session->userdata('log')){
			$this->load->model('Back_end');
			$form_data = $this->input->post();
			$this->Back_end->UpdateFormData($form_data, $id);
			redirect($this->base_url.'Admin/');
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');
	}
}