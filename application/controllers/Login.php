<?php

class Login extends CI_Controller{

	public function index()
	{
		$this->session->unset_userdata('email');
		return redirect('Main');
	}

	public function loginattempt()
	{

		$id = $this->input->post('email');
		$pwd = $this->input->post('password');

		$this->load->model('Signupmodel');

		$name = $this->Signupmodel->do_login($id,$pwd);
		if($name )
		{
			echo json_encode(1);
		}
		else{
			echo json_encode(0);
		}
	}



	// public function dashboard() //for select course
	// {
	// 	$this->load->view('select_course');
	// }
	public function logout() 
	{
		$this->session->unset_userdata('email');
		return redirect('Main');
	}
	
}