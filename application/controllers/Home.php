<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends FE_Controller {
	var $base_url;
	var $css;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->base_url = $this->config->item('base_url');
		$css = $this->config->item('css');
		
	}

	public function index()
	{
		$this->load->model('Front_end');
		$this->load->model('Carpet_info');
		$data['url'] = $this->base_url;
		$data['coms'] = $this->Front_end->getTodayEntry("Communication");
		$data['nav'] = $this->Front_end->getTodayEntry("Navigation");
		$data['sur'] = $this->Front_end->getTodayEntry("Surveillance");
		$data['wet'] = $this->Front_end->getTodayEntry("Weather System");
		$data['rad'] = $this->Front_end->getTodayEntry("Research and development");
		$data['comsinfo'] = $this->Carpet_info->getTodayEntry("coms");
		$data['navinfo'] = $this->Carpet_info->getTodayEntry("nav");
		$data['surinfo'] = $this->Carpet_info->getTodayEntry("sur");
		$data['css'] = "home";
		$data['js'] = "home";
		$data['title'] = "Home";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/footerBase', $data);
	}

	public function newTest(){
		echo "Controller is working";
		return "hello again";
	}

	public function links(){
		return	array('one' => anchor('todo/newTest', 'one'),
						'two' => anchor('BackEnd', 'two') );
	}

	public function details($id){
		$this->load->model('Front_end');
		$data['url'] = $this->base_url;
		$data['info'] = $this->Front_end->get_by_id($id);
		$data['css'] = "details";
		$data['js'] = "details";
		$data['title'] = "View details";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('details', $data);
		//$this->load->view('templates/footer', $data);
		$this->load->view('templates/footerBase', $data);
	}
}