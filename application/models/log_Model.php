<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class log_Model extends CI_model
      {
		private $tablename = 'user';
        public function __construct(){
	    parent::__construct();
	   $this->load->helper('url');
	
	      }
	     function get(){
                               
							 
									$email=$this->input->post('email');
									$password=$this->input->post('password');
									$this->db->select();
									$this->db->from('user');
									$this->db->where('email=',$email);
									$que = $this->db->get();
									$row = $que->result();

									if($row)
									{
                                      return ($row);
									}
									else
									{
										$data = [
													          
													            'email'=> $email,
													           'password'=> $password,
													            ];
													       $que= $this->db->insert('user', $data);
										       
									
									}
						    	
						  }	
						   function getlog(){
					     	                  
					     
					     				        $email=$this->input->post('email');
												$password=$this->input->post('password');
										        $multi= array('email'=> $email ,'password'=> $password);
												$this->db->select();
												$this->db->from('user');
												$this->db->where($multi);
												$que = $this->db->get();
												if ( $que->num_rows())
												{
													print_r($que->row()->user_id) ;
													exit;
												}	
												else
												{
													return false;
												}
											}	
											
						function getPost(){
							
							$id=$this->session->userdata('user_id');
							 $multi= array('user_id'=>$id);
							$this->db->select(); 
							$this->db->from('user');
							$this->db->where($multi);
							$query = $this->db->get();
							return $query->result() ;
							
									 
 }
			
					
}
		?>		