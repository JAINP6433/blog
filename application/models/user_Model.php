<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_model
      {
		private $tablename = 'product';
        public function __construct(){
	    parent::__construct();
	   $this->load->helper('url');
	
	  }
	     function getUsers(){
                                if($this->input->post('register')){
							 
									$name=$this->input->post('name');
									$email=$this->input->post('email');
									$password=$this->input->post('pass');
									$mobile=$this->input->post('mobile');
									$course=$this->input->post('course');
									$this->db->select();
									$this->db->from('student');
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
													          
													           'name'=> $name,
													           'email'=> $email,
													           'password'=> $password,
													           'mobile'=> $mobile,
													           'course'=> $course,
													        ];
													       $que= $this->db->insert('student', $data);
										           
									
									}
						      }	}		
				
                     	


 
					 function getLogin(){
					     	                  if ($this->input->post('login'))
					     	                 {
					     
					     				        $email=$this->input->post('email');
												$password=$this->input->post('password');
										        $multi= array('email'=> $email ,'password'=> $password);
												$this->db->select();
												$this->db->from('student');
												$this->db->where($multi);
												$que = $this->db->get();
												  
												
												if ( $que->num_rows())
												{
													return $que->row()->student_id;
												}	
												else
												{
													return false;
												}
											}
										}

									
					    function display_records()
						  {
								$query=$this->db->query("select * from data");
								return $query->result();
						  }					
                              function add_records()
											{
											if($this->input->post('add'))
											  {
													$title=$this->input->post('title');
													 $data = [
													            'title' => $title,
													            
													        ];
													       $que= $this->db->insert('data', $data);
										           
										           return($que);
										     
												}

									
						                }	
						                 public function delete($id)
									     {
									     
										   $this->db->where('id', $id);
										   $this->db->delete('data');
										   redirect('user_Controller/displaydata');
									     }		
				
                                 	  function displayrecord($id)
										{
										$query=$this->db->query("select * from data where id='".$id."'");
										return $query->result();
										}
										/*Update*/
										function update_records($title,$id)
										{
											$data=array(
												'title'=>$title);
											$this->db->where('id',$id);
											$query=$this->db->update('data',$data);
										return $query;
                                       }
				}			

		?>