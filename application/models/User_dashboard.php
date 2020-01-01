<?php

class User_dashboard extends CI_Model{
	
	public function index($email)
	{
		$q = $this->db
					->where('email',$email)
					->get('course');

		return $q->result();
	}
}