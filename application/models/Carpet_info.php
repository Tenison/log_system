<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* MIT
*/
class Carpet_info extends CI_Model
{	


	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getAllData(){
		$this->db->select("*");
		$this->db->from('info');
		$this->db->order_by("id", "DESC");
		
		$query = $this->db->get();
		$rst = array();
		foreach($query->result() as $row) { 
			# array of arrays
			$rst[] = array("id" => $row->id, "header" => $row->header, "content" => $row->content); 
		}
		return $rst;
	}

	function getTodayEntry($cart){
		$this->db->select("*");
		$this->db->from('info');
		$this->db->where('section', $cart);
		$this->db->order_by("id", "DESC");
		
		$query = $this->db->get();
		$rst = array();
		foreach($query->result() as $row) { 
			# array of arrays
			$rst[] = array("id" => $row->id, "header" => $row->header, "content" => $row->content);
		}
		return $rst;
	}
}