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
													return $que->row()->user_id;
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
							$res=$query->result();
							
							$this->db->select(); 
							$this->db->from('service');
							$this->db->limit(3);
							$que = $this->db->get();
							$product=$que->result();
							return array('data'=>$res,'users'=>$product)
							;
							
							
									 
                            }
                            function getService(){
							
							$this->db->select(); 
							$this->db->from('service');
							$query = $this->db->get();
							return $query->result() ;
							
									 
                              }
                              function addService(){
                              	     $service_Category=$this->input->post('service_Category');
									$service_Name=$this->input->post('service_Name');
									$service_Description=$this->input->post('service_Description');
									$service_Location=$this->input->post('service_Location');
									$service_Time=$this->input->post('service_Time');
									$service_Preparation_Time=$this->input->post('service_Preparation_Time');
								$service_Degrading_Time=$this->input->post('service_Degrading_Time');
									$service_Prize=$this->input->post('service_Prize');
									
									
									
                              	$data = [
													          
													            'service_Category'=> $service_Category,
													           'service_Name'=> $service_Name,
													           'service_Description'=> $service_Description,
													           'service_Location'=> $service_Location,
													           'service_Time'=> $service_Time,
													           'service_Preparation_Time'=> $service_Preparation_Time,
													          // 'service_Degrading_Time'=>$service_Degrading_Time,
													             'service_Prize'=>$service_Prize,
													            ];
													       $que= $this->db->insert('service', $data);
										       
                              }
			
					
}
		?>		