<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	private $tablename = 'users';
	public function __construct(){
		parent::__construct();
	}
	
	function getUsers($id)
	{
		//$this->db->where("id",$id);
		$this->db->order_by("name","DESC");
		$this->db->order_by("id","DESC");
		//$this->db->limit("2");
		$query = $this->db->get($this->tablename);
		$data = $query->result();
		return $data;
	}
	
	function test($username,$test)
	{
		die($username.'-'.$test);
	}
	
	
}
