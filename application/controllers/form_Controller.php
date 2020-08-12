<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');




class form_Controller extends CI_Controller {

	function __construct()
	{ 
		parent::__construct();
	}

		public function index()
		{

			die('string');
	} 
 

			$this->load->library('form_validation');
			$this->form_validation->set_rules('uname','user Name','required|alpha');
			$this->form_validation->set_rules('password','password','required|max_length[12]');
			if($this->form_validation->run())
			{
				echo"validation successfull";
			}
			else{
				$this->load->view('form');
			}
		}
	} 

