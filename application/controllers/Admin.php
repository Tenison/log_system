<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends BE_Controller {
	var $base_url;
	var $css;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->base_url = $this->config->item('base_url');
		$css = $this->config->item('css');
		$this->load->model('Back_end');
		$this->load->library('form_validation');
		$this->load->library("pagination");
		$this->load->model('User_info');
	}

	public function index()
	{	
		if($this->session->userdata('log')){

			$data['url'] = $this->base_url;
			$data['css'] = "admin";
			$data['js'] = "admin";
			$data['title'] = "Admin";
			$data['solved'] = $this->Back_end->count_status('Solved');
			$data['monitor'] = $this->Back_end->count_status('Monitoring');
			$data['pending'] = $this->Back_end->count_status('Pending');
			$data['all'] = $this->Back_end->record_count();
			$data['coms'] = $this->Back_end->count_cart('Communication');
			$data['nav'] = $this->Back_end->count_cart('Navigation');
			$data['rad'] = $this->Back_end->count_cart('Research and Development');
			$data['wet'] = $this->Back_end->count_cart('Weather System');
			$data['sur'] = $this->Back_end->count_cart('Surveillance');
			$emp_data = $this->User_info->getUser($this->session->userdata('username'));
			//echo "heo";

			$newdata1 = array('empname'  => $emp_data->Name);
	        $this->session->set_userdata($newdata1);

			$this->load_page('adim-panel' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');     
	}
////bad code
	public function viewAll()
	{
		if($this->session->userdata('log')){
				$data['url'] = $this->base_url;
		
				$data['title'] = "Manager Entry Database Here";

				//pan
		        $config = array();
		        $config["base_url"] = base_url() . "admin/viewAlls";
		        $config["total_rows"] = $this->Back_end->record_count();
		        $config["per_page"] = 50;
		        $config['use_page_numbers'] = TRUE;
		        $config["uri_segment"] = 3;
		        $choice = $config["total_rows"] / $config["per_page"];
		        $config["num_links"] = round($choice);
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				//pan

				$data['all'] = $this->Back_end->getAllData($config["per_page"], $page);
				$data["links"] = $this->pagination->create_links();


				//$this->load_page('backend/allLogs' , $data);
				$this->load->view('backend/allLogs', $data);
		}else
				redirect($this->base_url.'Adim_login/', 'refresh');
	}


	public function viewAlls()
	{
		if($this->session->userdata('log')){
				$data['url'] = $this->base_url;
		
				$data['title'] = "Manager Entry Database Here";

				//pan
		        $config = array();
		        $config["base_url"] = base_url() . "admin/viewAlls";
		        $config["total_rows"] = $this->Back_end->record_count();
		        $config["per_page"] = 50;
		        $config['use_page_numbers'] = TRUE;
		        $config["uri_segment"] = 3;

		        $choice = $config["total_rows"] / $config["per_page"];
		        $config["num_links"] = round($choice);
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				//pan

				$data['all'] = $this->Back_end->getAllData($config["per_page"], $page);
				$data["links"] = $this->pagination->create_links();

				//$this->load_page('backend/allLogs' , $data);
				$this->load->view('backend/allLogs', $data);
		}else
				redirect($this->base_url.'Adim_login/', 'refresh');
	}

	public function viewToday()
	{	
		if($this->session->userdata('log')){

			$data['url'] = $this->base_url;
			$data['dailyinfo'] = $this->Back_end->getTodayEntryAll();
			$data['css'] = "view";
			$data['js'] = "views";
			$data['title'] = "All Today Logs";
			//echo "heo";

			$this->load_page('backend/today' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');     
	}
//bad code

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

    public function employees(){
    	$this->load->model('User_info');
        $this->form_validation->set_rules('emp_name', 'Employee Name', 'required');
        $this->form_validation->set_rules('emp_id', 'Id Number', 'required'); 


        if($this->form_validation->run()==FALSE){  
        	$data["empsData"] = $this->User_info->getTableData('projects');//projects is emp table name      
			$data['url'] = $this->base_url;
			$data['css'] = "register";
			$data['js'] = "register";
			$data['title'] = "Employees ";
			//var_dump( $this->User_info->getTableData('projects'));

			$this->load_page('backend/employees', $data);             
        }else{
			$data_products = array('emp_name' => $this->input->post('emp_name'),
									'emp_id' => $this->input->post('emp_id')
								);

			if ($this->User_info->create_emp($data_products, 'projects')) {//projects is emp db
                  $this->session->set_flashdata('created','User Has Been Registered');
                  redirect('Admin/employees');
            }
          
        }        

    }  

    public function approval($id = ""){
    	$this->form_validation->set_rules('emp_name', 'Name', 'required');

        if($this->form_validation->run()==FALSE){  
        	//$data["empsData"] = $this->User_info->getTableData('projects');//projects is emp table name      
			$data['url'] = $this->base_url;
			$data['css'] = "register";
			$data['js'] = "register";
			$data['title'] = "Approve Logs";
			$data['dailyinfo'] = $this->Back_end->getEntrySevenDays();


			$this->load_page('backend/approval', $data);             
        }else{
			$data_products = array('apvuser' => $this->input->post('emp_name'),
									'apvl_comment' => $this->input->post('comment'),
									'apvl_status' => 1
								);

			if ($this->Back_end->update_emp($data_products, $id)) {//projects is emp db
                  $this->session->set_flashdata('created','A Log Has been Signed');
                  redirect('Admin/approval');
            }
          
        }        

    } 

    public function regbtn(){
		$this->load->model('User_info');

        $this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|min_length[3]');
         $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');  
        if($this->form_validation->run()==TRUE and $this->User_info->chk_reg($this->input->post('user_name'))){  
			$form_data = $this->input->post();
			$this->User_info->insertUser($form_data);
    		echo "<script>";
			echo " alert('Successfully Done !!! User Created...Please click enter to continue');      
			        window.location.href='".site_url('Admin')."';
			</script>";
        }else{
			echo "<script>";
			echo " alert('Error!!!  Users Already Exist or Incorrect password match');      
			        window.location.href='".site_url('Admin/register')."';
			</script>";
        }
    }



	public function search()
	{
		if($this->session->userdata('log')){
			$data['url'] = $this->base_url;
			$data['css'] = "search";
			$data['js'] = "search";
			$data['title'] = "Advance Search";

			if(!empty($this->input->post())){
				$form_data = $this->input->post();
				$data['dailyinfo'] = $this->Back_end->getAdvanceSearch($form_data['cart'],$form_data['date'] , $form_data['date1']);
				
	        	$this->session->set_userdata($form_data);
			}else{
				$data['dailyinfo'] = array();
			}

			$this->load_page('backend/search' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');
	}

	public function print_logs(){
		if($this->session->userdata('log')){
			$data['url'] = $this->base_url;
			$data['css'] = "search";
			$data['js'] = "search";
			$data['title'] = "Print Logs";

			if(!empty($this->input->post())){
				$form_data = $this->input->post();
				$data['dailyinfo'] = $this->Back_end->getAdvanceSearch('all',$form_data['date'] , $form_data['date1']);
				
	        	$this->session->set_userdata($form_data);
			}else{
				$data['dailyinfo'] = array();
			}

			$this->load_page('backend/print' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');
	}
	
	public function view($section = '')
	{
		if($this->session->userdata('log')){
			$data['url'] = $this->base_url;
			$temp = str_replace("_", " ", $section);
			$data['css'] = "view";
			$data['js'] = "views";
			$data['title'] = $temp;

			$data['dailyinfo'] = $this->Back_end->getCartEntry($temp);

			$this->load_page('backend/view' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');
	}

	public function viewstat($section = '')
	{
		if($this->session->userdata('log')){
			$data['url'] = $this->base_url;
			$temp = str_replace("_", " ", $section);
			$data['css'] = "view";
			$data['js'] = "views";
			$data['title'] = $temp;

			$data['dailyinfo'] = $this->Back_end->getStatEntry($temp);

			$this->load_page('backend/viewstat' , $data);
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

	public function delStat($section = '',$id = ''){
		if($this->session->userdata('log')){
			$this->Back_end->delete_by_id($id);
			$data['url'] = $this->base_url;
			$temp = str_replace("%20", "_", $section);

			//$this->view($temp);
			redirect($this->base_url.'Admin/viewstat/'.$temp);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');

	}

		public function delSearch($id = ''){
		if($this->session->userdata('log')){
			$this->Back_end->delete_by_id($id);
			$data['url'] = $this->base_url;
			$data['css'] = "search";
			$data['js'] = "search";
			$data['title'] = "Advance Search";


			$data['dailyinfo'] = $this->Back_end->getAdvanceSearch($this->session->userdata('cart'),$this->session->userdata('date'), $this->session->userdata('date1'));


			$this->load_page('backend/search' , $data);
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');

	}

	public function delAll($section = '',$id = ''){
		if($this->session->userdata('log')){
			$this->Back_end->delete_by_id($id);

			//$this->view($temp);
			redirect($this->base_url.'Admin/'.$section);
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

	public function submitted(){
		if($this->session->userdata('log')){
			$this->load->model('Back_end');
			$form_data = $this->input->post();
			$this->Back_end->postFormData($form_data); //UpdateFormData($form_data, $id);
			redirect($this->base_url.'Admin/');
		}else
			redirect($this->base_url.'Adim_login/', 'refresh');
	}


}