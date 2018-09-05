<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* MIT
*/
class User_info extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function login_user($user,$pass){
	 
	  $this->db->select('*');
	  $this->db->from('users');
	  $this->db->where('user',$user);

	 
	  if($query=$this->db->get())
	  {
        $db_password = $query->row(2)->pass;
        if(password_verify($pass,$db_password)){
            return $query->row_array();
        }   
	  }
	  else{
	    return false;
	  }
	}

	public function getUser($user){
			$this->db->from('users');
	  		$this->db->where('user',$user);

	  	$query=$this->db->get();
	  	return $query->row();	
	}

	public function create_emp($data_products, $table){
		//guery insert into database 	
		return $this->db->insert($table,$data_products);
				
	}//end function craete

	public function chk_reg($user){

	  $this->db->where('user',$user);
	  $query=$this->db->get('users');

	  if($query->num_rows() > 0){
 		return false;
	  }else{
	    return true;
	  }
	}

	public function getTableData($table){ 
		$this->db->order_by("id", "DESC");
		$query = $this->db->get($table);
		
		if($query->num_rows() > 0 ) {
				return $query->result();
		} else {
				 return array();
		} //end if num_rows					
	}//end function all_products

	function insertUser($form_data){
        $options = ['cost'=>12];
        $encripted_pass = password_hash( $this->input->post('password'),PASSWORD_BCRYPT,$options);   
		$data = array
		(
			'user' => $form_data['user_name'],
			'Name' => $form_data['full_name'],
			'pass' => $encripted_pass,
			'level' => $form_data['level']
		);
		$this->db->insert('users',$data);
	}


    function getUsers(){
	    $this->db->order_by("id", "DESC");
	    $this->db->from('users');

	  if($query=$this->db->get())
	  {
        foreach($query->result() as $row) { 
                # array of arrays
                $rst[] = array("id" => $row->id, "name" => $row->Name, "username" => $row->user, "password" => $row->pass, "level" => $row->level); 
        }

	    return $rst;
	  }
	  else{
	    return false;
	  }    	
    }

    public function delete_user($id){
		$this->db->where('id',$id);
		$this->db->delete('users');

	}

	public function delete_emps($id){
		$this->db->where('id',$id);
		$this->db->delete('projects');

	}
}