<?php
class Get_data extends CI_model
 {
	public function data()
	{
		$this->load->database();
		$q=$this->db->get(" User");
		return $q->result_array();

	}
}
?> 