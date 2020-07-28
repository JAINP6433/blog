<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller 
{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('user_Model');
		}
	   public function index()
	    {
			die('string');
		}
	   public function users()
	   
		{
			
		        $output = $this->user_Model->getUsers();
		        if($output)
				{
					$data['error']="<h3 style='color:red'>This user already exists</h3>";
				}
				else
				{
				    $data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
				  
					
				}
                $this->load->view('user/user_View',$data);
			  
        }
      public function login()
	    { 
	    	
			              $output = $this->user_Model->getLogin();
			           if($output)
						{  
							 $this->load->library('session');
					        $this->session->set_userdata('student_id');
						   return redirect('user_controller/displaydata');
			            }
       
			else
			{
			   $data['error']="<h3 style='color:red'>Invalid login details</h3>";
           		 			    					
           $this->load->view('user/login_View',$data); 
         }
     }
         
   

          public function displaydata()
			{
			$output['point'] = $this->user_Model->display_records();
			$this->load->view('user/dashboard',$output);
			}
			public function add()
			{
				$output = $this->user_Model->add_records();
                 $this->load->view('user/add',$output);
				if($output){
				return redirect('user_Controller/displaydata');}

				
			}
			public function delete($id)
	     { 
		   
		  $output= $this->user_Model->delete($id);
	     }
	    
	public function update($id)
	{

	$result['data']=$this->user_Model->displayrecord($id);

		$this->load->view('user/update_view',$result);
	
		if($this->input->post('update'))
		{
		$title=$this->input->post('title');
		$output =$this->user_Model->update_records($title,$id);
		if($output){
		return redirect('user_Controller/displaydata');}

		}
	}
	
  }
?>