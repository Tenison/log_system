<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* MIT
*/
class Front_end extends CI_Model
{	


	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function record_count() {
        return $this->db->count_all("backbonedb");
    }

    function getAllEmps(){
        $this->db->order_by("id", "DESC");
        $query = $this->db->get("projects");
        
        if($query->num_rows() > 0 ) {
                return $query->result();
        } else {
                 return array();
        } //end if num_rows 
    }

	function getAllData($limit, $start){
		
		$this->db->from('backbonedb');
		$this->db->limit($limit, $start);
		$this->db->order_by("id", "DESC");

		
		$query = $this->db->get();
		$rst = array();
		if ($query->num_rows() > 0) {
			foreach($query->result() as $row) { 
				# array of arrays
				$rst[] = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution, "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status, 'empuser' => $row->empuser, 'superuser' => $row->superuser, 'apvuser' => $row->apvuser , 'apvlstatus' => $row->apvl_status, 'apvlcomment' => $row->apvl_comment); 
			}
			$this->db->close(); // for default Connection

			return $rst;
        }
        return false;
	}

	function getTodayEntry($cart){
		$this->db->from('backbonedb');
		$this->db->where('date =',date('Y-m-d'));
		$this->db->where('Cart', $cart);
		$this->db->order_by("id", "DESC");
		
		$query = $this->db->get();
		$rst = array();
		foreach($query->result() as $row) { 
			# array of arrays
			$rst[] = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution, "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status, 'empuser' => $row->empuser, 'superuser' => $row->superuser, 'apvuser' => $row->apvuser , 'apvlstatus' => $row->apvl_status, 'apvlcomment' => $row->apvl_comment); 
		}
		//$this->db->close(); // for default Connection*/
		return $rst;
	}

	function postFormData($form_data){
		switch ($form_data['cart']) {
		    case "Communication":
		       	$form_data['subcart'] = $form_data['comsubcart'];
		        break;
		    case "Navigation":
		        $form_data['subcart'] = $form_data['navsubcart'];
		        break;
		    case "Surveillance":
		        $form_data['subcart'] = $form_data['sursubcart'];
		        break;
		    case "Weather System":
		        $form_data['subcart'] = "";
		        break;
		    case "Research and development":
		        $form_data['subcart'] = $form_data['radsubcart'];
		        break;
		    default:
		        $form_data['subcart'] = "";
		}
		$data = array
		(
			'summary' => $form_data['summary'],
			'fault' => $form_data['fault'],
			'solution' => $form_data['solution'],
			'date' => date('Y-m-d'),
			'time' => date("H:i:s"),
			'year' => date("Y"),
			'Cart' => $form_data['cart'],
			'subcart' => $form_data['subcart'],
			'status' => $form_data['status'],
			'area' => $form_data['area'],
			'empuser' => $this->getEmpData($form_data['emp_select'])
		);
		$this->db->insert('backbonedb',$data);
		$this->db->close(); // for default Connection
	}

    public function getEmpData($emp_id){ 
        $this->db->where('emp_id', $emp_id);
        $query = $this->db->get('projects');
        
        
        return $query->result()[0]->emp_name;                  
    }//end function
    
	public function get_by_id($id)
    {
        $this->db->from('backbonedb');
        $this->db->where('id',$id);
        $query = $this->db->get();
 		
        $row = $query->row();
        return $rst = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution, "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status, 'empuser' => $row->empuser, 'superuser' => $row->superuser, 'apvuser' => $row->apvuser , 'apvlstatus' => $row->apvl_status, 'apvlcomment' => $row->apvl_comment);  
    }
}