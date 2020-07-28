<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_model extends CI_model
 {
		private $tablename = 'product';
        public function __construct(){
	    parent::__construct();
	}
		function getUsers()
	{    //for insert 
		/*  $p = array(
	   'FirstName' => 'shivam' ,
	   'LastName' => 'mali' ,
	   'Email' => 'shivam@gmail.com' ,
	   'Password' => 'shivam1234' , 
	   'PhoneNo' => '6544439985' ,
	   'Age' => '22'
			);
		$this->db->insert('product', $p);*/
		//for update 
		$q = array(
		       'FirstName' => 'nitesh' ,
			   'LastName' => 'soni' ,
			   'Email' => 'nitesh@gmail.com' ,
			   'Password' => 'rupal1234' , 
			   'PhoneNo' => '9678543326' ,
			   'Age' => '25'
            );
            $this->db->where('id', 24);
			$this->db->update('product', $q);
	//for delete 
			$this->db->where('id', 5)
                      ->delete('product');

		 $query = $this->db->get('product');
		 $data = $query->result();
		 return $data;
   }    
}

?> 