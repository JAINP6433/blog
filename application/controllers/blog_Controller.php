<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog_Controller extends CI_Controller {

	public function __construct(){
									parent::__construct();
									}
   public function index()
	{
		die('string');
	}
	public function Users()
	{
		$this->load->helper('url');
 $this->load->view('blog/header');
 $this->load->view('blog/login');
  $this->load->view('blog/footer');
    }
    
    
}
