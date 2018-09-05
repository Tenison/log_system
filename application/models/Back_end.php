<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* MIT
*/
class Back_end extends CI_Model
{	


	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function count_status($status){
        return $this->db
            ->where('status', $status)
            ->count_all_results('backbonedb');
    }

    public function count_cart($cart){
        return $this->db
            ->where('Cart', $cart)
            ->count_all_results('backbonedb');
    } 

    public function record_count() {
        return $this->db->count_all("backbonedb");
    }

    function getAllData($limit, $start){
        
        $this->db->from('backbonedb');
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "DESC");
        $this->db->order_by("date", "DESC");
        $this->db->order_by("time", "DESC");
        
        $query = $this->db->get();
        $rst = array();

            foreach($query->result() as $row) { 
                # array of arrays
                $rst[] = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution,
                "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status); 
            }
            $this->db->close(); // for default Connection

            return $rst;

    }


    function getCartEntry($cart){ 

        //$query = $this->db->get_where('backbonedb', array('Cart' => $cart),  $start, $limit);
        $this->db->from('backbonedb');
        $this->db->where('Cart', $cart);
        $this->db->where('date <=', date("Y-m-d"));
        $this->db->where('date >=', date('Y-m-d', strtotime('-7 days')));

        $this->db->order_by("date", "DESC");
        $this->db->order_by("time", "DESC");
        $query = $this->db->get();
        $rst = array();

            foreach($query->result() as $row) { 
                # array of arrays
                $rst[] = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution,
                "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status); 
            }
            $this->db->close(); // for default Connection

            return $rst;

    }

    function getEntrySevenDays(){ 

        //$query = $this->db->get_where('backbonedb', array('Cart' => $cart),  $start, $limit);
        $this->db->from('backbonedb');
        $this->db->where('date <=', date("Y-m-d"));
        $this->db->where('date >=', date('Y-m-d', strtotime('-7 days')));

        $this->db->order_by("date", "DESC");
        $this->db->order_by("time", "DESC");
        $query = $this->db->get();
        $rst = array();

            foreach($query->result() as $row) { 
                # array of arrays
                $rst[] = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution, "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status, 'empuser' => $row->empuser, 'superuser' => $row->superuser, 'apvuser' => $row->apvuser , 'apvlstatus' => $row->apvl_status, 'apvlcomment' => $row->apvl_comment); 
            }
            $this->db->close(); // for default Connection

            return $rst;

    }

    function getstatEntry($status){
        $this->db->from('backbonedb'); 
        $this->db->where('status', $status);
        $this->db->where('date <=', date('Y-m-d'));
        $this->db->where('date >=', date('Y-m-d', strtotime('-7 days')));

        $this->db->order_by("date", "DESC");
        $this->db->order_by("time", "DESC");
        $query = $this->db->get();
        $rst = array();
   
            foreach($query->result() as $row) { 
                # array of arrays
                $rst[] = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution, "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status, 'empuser' => $row->empuser, 'superuser' => $row->superuser, 'apvuser' => $row->apvuser , 'apvlstatus' => $row->apvl_status, 'apvlcomment' => $row->apvl_comment); 
            }
            $this->db->close(); // for default Connection

            return $rst;

    }

    function getTodayEntryAll(){
        $this->db->select("*");
        $this->db->from('backbonedb');
        $this->db->where('date =',date('Y-m-d'));
        $this->db->order_by("id", "DESC");

        $query = $this->db->get();
        $rst = array();
        foreach($query->result() as $row) { 
            # array of arrays
            $rst[] = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution, "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status, 'empuser' => $row->empuser, 'superuser' => $row->superuser, 'apvuser' => $row->apvuser , 'apvlstatus' => $row->apvl_status, 'apvlcomment' => $row->apvl_comment); 
        }
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
			'time' => date("h:i:sa"),
			'year' => date("Y"),
			'Cart' => $form_data['cart'],
			'subcart' => $form_data['subcart'],
			'status' => $form_data['status'],
            'area' => $form_data['area'],
            'empuser' => $form_data['empuser'],
            'superuser' => $form_data['emp_name']
		);
		$this->db->insert('backbonedb',$data);
	}

    function getAdvanceSearch($cart, $date1, $date2){ 

        //$query = $this->db->get_where('backbonedb', array('Cart' => $cart),  $start, $limit);
        
        if($cart == "all"){
            $this->db->select("*");
            $this->db->from('backbonedb');
        }else{
            $this->db->from('backbonedb');
            $this->db->where('Cart', $cart);
        }
        $this->db->where('date <=', $date2);
        $this->db->where('date >=', $date1);

        $this->db->order_by("date", "DESC");
        $this->db->order_by("time", "DESC");
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        $rst = array();

            foreach($query->result() as $row) { 
                # array of arrays
                $rst[] = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution, "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status, 'empuser' => $row->empuser, 'superuser' => $row->superuser, 'apvuser' => $row->apvuser , 'apvlstatus' => $row->apvl_status, 'apvlcomment' => $row->apvl_comment);  
            }
            $this->db->close(); // for default Connection

            return $rst;
    }
///////////

 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        $this->db->limit($limit, $start);
        return $query->result();
    }
 
 
    public function get_by_id($id)
    {
        $this->db->from('backbonedb');
        $this->db->where('id',$id);


       $query = $this->db->get();
 
        $row = $query->row();
        return $rst = array("id" => $row->id, "summary" => $row->summary, "fault" => $row->fault, "solution" => $row->solution, "date" => $row->date, "time" => $row->time, "year" => $row->year, "area" => $row->area,"cart" => $row->Cart, "subcart" => $row->subcart, "status" => $row->status, 'empuser' => $row->empuser, 'superuser' => $row->superuser, 'apvuser' => $row->apvuser , 'apvlstatus' => $row->apvl_status, 'apvlcomment' => $row->apvl_comment); 
    }
 
 
    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('backbonedb');
    }

    public function UpdateFormData($form_data, $id){
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
            'superuser' => $form_data['emp_name']
        );

        $this->db->where('id', $id);
        $this->db->update('backbonedb', $data);
        return $this->db->affected_rows();
    }

    public function update_emp($form_data, $id){
        $this->db->where('id', $id);
        $this->db->update('backbonedb', $form_data);
        return $this->db->affected_rows();       
    }
}