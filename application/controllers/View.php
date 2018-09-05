<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends FE_Controller {
	var $base_url;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->base_url = $this->config->item('base_url');
		$css = $this->config->item('css');
        $this->load->library("pagination");
        $this->load->model('Front_end');
	}

	public function index()
	{
        $config = array();
        $config["base_url"] = base_url() . "view/cns";
        $config["total_rows"] = $this->Front_end->record_count();
        $config["per_page"] = 50;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		
		//$data['links'] = $this->links();
		$data['url'] = $this->base_url;
		//$data['coms'] = $this->Front_end->getTodayEntry("Communication");
		$data['css'] = "view";
		$data['js'] = "view";
		$data['title'] = "View";
		$data['all'] = $this->Front_end->getAllData($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		//var_dump($this->Front_end->getAllData());
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('view', $data);
		//$this->load->view('templates/footer', $data);
		$this->load->view('templates/footerBase', $data);
	}

	public function cns()
	{
        $config = array();
        $config["base_url"] = base_url() . "view/cns";
        $config["total_rows"] = $this->Front_end->record_count();
        $config["per_page"] = 50;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		
		//$data['links'] = $this->links();
		$data['url'] = $this->base_url;
		//$data['coms'] = $this->Front_end->getTodayEntry("Communication");
		$data['css'] = "view";
		$data['js'] = "view";
		$data['title'] = "View";
		$data['all'] = $this->Front_end->getAllData($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		//var_dump($this->Front_end->getAllData());
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('view', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/footerBase', $data);
	}

	public function details($id){

		$data['url'] = $this->base_url;
		$data['info'] = $this->Front_end->get_by_id($id);
		$data['css'] = "details";
		$data['js'] = "details";
		$data['title'] = "View details";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('details', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/footerBase', $data);
	}
}