<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog_Controller extends CI_Controller {

	public function __construct(){
									parent::__construct();
									$this->load->helper('url');
									$this->load->model('log_Model');
	

	
									}
   public function index()
	{
		die('string');
	}
	public function Users()
	{   
		if($this->input->post('submit'))
          {
			$output = $this->log_Model->get();
		        if($output)
				{
					$data['error']="<h3 style='color:red'>This user already exists</h3>";
				}
				else
				{
				    $data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
				  
					
				}
		  }
				
	   if($this->input->post('login'))
          {
			$output = $this->log_Model->getlog();
		           if($output)
				{  
			    	 $this->load->library('session');
					 $this->session->set_userdata('id');
					return redirect('blog_Controller/displaydata');
			    }
			else
				{
				  $data['error']="<h3 style='color:red'>Invalid login details</h3>";
										           		 			    					
			    }
	   
         }
  
		
		 $this->load->view('blog/header');
		 $this->load->view('blog/login');
		  $this->load->view('blog/footer');

		 }
		 public function displaydata(){
		 	$this->load->view('blog/header');
		    $this->load->view('blog/dashboard');
		    $this->load->view('blog/footer');

		 				
		 }
 
    }
    ?>
    