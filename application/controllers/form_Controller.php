<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

<<<<<<< HEAD
class Whatsapp extends CI_Controller {

	function __construct()
	{ 
		
		parent::__construct();
		}
=======
class form_Controller extends CI_Controller {

	function __construct()
	{ 
		parent::__construct();
	}
>>>>>>> blog1
		public function index()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('uname','user Name','required|alpha');
			$this->form_validation->set_rules('password','password','required|max_length[12]');
			if($this->form_validation->run())
			{
				echo"validation successfull";
			}
			else{
				echo validation_errors();
			}
<<<<<<< HEAD
		}
	}
=======
		$this->load->view('form');
		}
	} 
>>>>>>> blog1
