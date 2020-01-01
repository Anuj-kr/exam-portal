<?php

class Dashboard extends CI_Controller
{

	public function index()
	{
		$email = $this->session->userdata('email');
		// $this->load->model('User_dashboard');
		// $course = $this->User_dashboard->index($email);

		
		$this->load->view('user_dashboard.php');
	}
	
	public function course()
	{
		$id = $this->session->userdata('id');
		$course = $this->input->post();

		unset($course['submit']);
		$course['email'] = $this->session->userdata('email');

		$this->load->model('Signupmodel');
		if( $this->Signupmodel->course_add($id,$course) ){

			$this->session->set_userdata('f',"1");
			return redirect('Dashboard');
		}

		
	}
}