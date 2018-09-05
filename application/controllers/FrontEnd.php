<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontEnd extends FE_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function newTest(){
		echo "Controller is working";
		return "hello again";
	}

}