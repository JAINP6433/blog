<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog_Controller extends CI_Controller {

	public function __construct(){
									parent::__construct();
									$this->load->helper('url');
									$this->load->model('log_Model');
	                                  $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');

	
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
					 $this->session->set_userdata('user_id',$output);
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
           $output = $this->log_Model->getPost(); 
           $this->load->view('blog/header');
		    $this->load->view('blog/dashboard',$output);
		    $this->load->view('blog/footer');

		 				
		 }
		 public function add_a_service(){
		 	if($this->input->post('addService'))
          {
			$output = $this->log_Model->addService();
		        
				   echo "<h3 style='color:blue'>Your account created successfully</h3>";
				  
					
				}
		
              
           $output['data'] = $this->log_Model->getPost(); 
           $this->load->view('blog/header');
		    $this->load->view('blog/add_Service',$output);
		    $this->load->view('blog/footer');

		 				
		 }
		  public function my_booked_services(){
		  	 $output['data'] = $this->log_Model->getservice(); 
          
		 	$this->load->view('blog/header');
		    $this->load->view('blog/my-booked-services',$output);
		    $this->load->view('blog/footer');

		 				
		 }
		  public function my_favorite_services(){
		 	$this->load->view('blog/header');
		    $this->load->view('blog/my-favorite-services');
		    $this->load->view('blog/footer');

		 				
		 }
		 public function my_favorite_providers(){
		 	$this->load->view('blog/header');
		    $this->load->view('blog/my-favorite-providers');
		    $this->load->view('blog/footer');

		 				
		 }
		 public function my_reviews(){
		 	$this->load->view('blog/header');
		    $this->load->view('blog/my-reviews');
		    $this->load->view('blog/footer');

		 				
		 }
		  public function user_Setting(){
		 	$this->load->view('blog/header');
		    $this->load->view('blog/user_Setting');
		    $this->load->view('blog/footer');

		 				
		 } 
		 public function logout(){ 
        $this->session->unset_userdata('user_id'); 
        $this->session->sess_destroy(); 
        redirect('blog_Controller/users'); 
    } 
 
 
    }
    ?>
    