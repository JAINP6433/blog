<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_controller extends CI_Controller {

	public function __construct(){
									parent::__construct();
									$this->load->model('demo_model');
								}
   public function index()
	{
		die('string');
	}
	public function Users()
	{
		        $output['userData'] = $this->demo_model->getUsers();
                $this->load->view('Demo_view',$output);
    }
    
    
}
