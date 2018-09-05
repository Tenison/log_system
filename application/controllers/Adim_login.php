<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adim_login extends FE_Controller {
	var $base_url;
	var $css;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->base_url = $this->config->item('base_url');
		$css = $this->config->item('css');
		$this->load->model('User_info');
        
	}

	public function index()
	{
		$data['url'] = $this->base_url;
		$data['css'] = "adimLogin";
		$data['js'] = "adim_login";
		$data['title'] = "Login";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('adim-login', $data);
		$this->load->view('templates/footerBase', $data);
	}



	public function links(){
		return	array('one' => anchor('todo/newTest', 'one'),
						'two' => anchor('BackEnd', 'two') );
	}
	 
	function login_user(){
	  $data['url'] = $this->base_url;
	  $user_login=array(
		  'user_email'=>$this->input->post('user_email'),
		  'user_password'=> $this->input->post('user_password')
	   );
	 	
	    $data=$this->User_info->login_user($user_login['user_email'],$user_login['user_password']);

	    if($data){
	    	$newdata = array(
			        'username'  => $user_login['user_email'],
			        'log' => TRUE,
 			);
 			 
	        $this->session->set_userdata($newdata);
	        redirect('Admin/index');
	       
	    }else{
	        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
	        $this->index();
	        //echo 'not done';
	    } 
	 
	}

	public function viewUsers(){
		$data['url'] = $this->base_url;
		$data['result'] = $this->User_info->getUsers();
		$this->load->view('backend/user_view', $data);
	}
	 
	 public function delUser($id){
	 	$data['url'] = $this->base_url;
	 	$this->User_info-> delete_user($id);
	 	redirect($this->base_url.'Adim_login/viewUsers');
	 }

	public function delEmp($id){
		$data['url'] = $this->base_url;
	 	$this->User_info-> delete_emps($id);
	 	redirect($this->base_url.'Admin/employees');
	}

	public function user_logout(){
	  $this->session->sess_destroy();
	  redirect($this->base_url.'Adim_login/');
	}
}