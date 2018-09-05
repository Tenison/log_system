<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends FE_Controller {
	var $base_url;
	var $css;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->base_url = $this->config->item('base_url');
		$css = $this->config->item('css');
		$this->load->model('Front_end');
	}

	public function index()
	{
		$this->form_validation->set_rules('emp_select','Employee Name ID','required');
		$this->form_validation->set_rules('id_number','Employee ID','required|matches[emp_select]');

		if ($this->form_validation->run() == FALSE){
			//$this->load->model('todo_model');
			//$result = $this->todo_model->getAllInfo();
			$data['links'] = $this->links();
			$data['url'] = $this->base_url;
			$data['css'] = "form";
			$data['js'] = "form";
			$data['title'] = "Forms";
			$data['emps'] = $this->Front_end->getAllEmps();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('forms', $data);
			//$this->load->view('templates/footer', $data);
			$this->load->view('templates/footerBase', $data);
		}else{

			$form_data = $this->input->post();
			$this->Front_end->postFormData($form_data);
			redirect($this->base_url.'Home');
		}
	}

	public function links(){
		return	array('one' => anchor('todo/newTest', 'one'),
						'two' => anchor('BackEnd', 'two') );
	}
}