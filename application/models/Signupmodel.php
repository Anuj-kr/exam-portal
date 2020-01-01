<?php

class Signupmodel extends CI_Model{

	public function Sign_Up($data)
	{
		
		return $this->db->insert('user',$data);
		// return $res;
	}

	public function do_login($id,$pwd)
	{
		$query=$this->db->where(['email'=>$id,'password'=>$pwd])
						->get('user');
		if($query->num_rows() )
		{
			$this->session->set_userdata('id',$query->row()->id);
			$this->session->set_userdata('name',$query->row()->name);
			$this->session->set_userdata('email',$query->row()->email);
			$this->session->set_userdata('phone',$query->row()->phone);
			// $this->session->set_userdata('f',$query->row()->flag);
			//print_r($query->row()->flag);exit;
			return $query->row()->name;
		}
		else
		{
			return FALSE;
		}

	}


	public function course_add($id,$course_data)
	{
		$this->db
				->where('id',$id)
				->set('flag',1)
				->update('user');

		return $this->db->insert('course',$course_data);

	}

	public function user_details($id,$data)
	{
		return $this->db
						->where('id',$id)
						->update('user',$data);

	}


	public function check_email_existance($email)
	{
		$qq =  $this->db->where(['email'=>$email])
						->from('user')
						->get();
		return $qq->num_rows();

	}
}