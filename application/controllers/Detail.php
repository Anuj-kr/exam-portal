<?php

class Detail extends CI_Controller
{

	public function index()
	{
		$this->load->view('detail');
	}

	public function details()
	{
		$data = $this->input->post();
		unset($data['submit']);

		$id = $this->session->userdata('id');

		$this->load->model('Signupmodel');

		$this->Signupmodel->user_details($id,$data);
	}

	public function course()
	{

	}
}