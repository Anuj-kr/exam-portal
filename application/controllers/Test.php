<?php

class Test extends CI_Controller{
	
	public function index()
	{
		//$this->load->view('tests');
	}

	public function mocktest()
	{	
		$user = $this->session->userdata('email');
		$course = $_GET['id'];
		// print_r($div);exit;
		$this->load->model('Tests');
		$testid = $this->Tests->ibps_po($course,$user);

			//fetching previous test status of user
		$test_status = $this->Tests->fetch_test_status($user);
		$tests = "";
		$end_tests = "";
		$test_given = "";
		foreach ($test_status as $value) 
		{
			$tests = $tests."&".$value->test_id;
			$end_tests = $end_tests."&".$value->end_test;
			$test_given = array("arr1"=>$tests,"arr2"=>$end_tests);
		}
		// $tests_given = explode("&", $tests_given);
		// $end_tests = explode("&", $end_tests);
		// print_r($test_given);exit;

		// if($testid)
		// {
			$this->load->view('mocktest',compact('testid',$testid,'test_given',$test_given));
		// }
	}

	public function tests_status()
	{
		$user = $this->input->post('user_id');
		$this->load->model('Tests');
		$test_status = $this->Tests->fetch_test_status($user);

		foreach ($test_status as $test) {
			// echo json_encode($test);

		}
		// print_r($test);
		echo json($test_status);
		
	}

	public function topictest()
	{
		$this->load->view('topictest');
	}


	public function gktest()
	{
		$this->load->view('gktest');
	}


	public function mocktest_ibps_po()
	{
		$this->load->model('Tests');
		$testid = $this->Tests->ibps_po('ibps_po');
		if($testid)
		{
			$this->load->view('mocktest',compact('testid',$testid));
		}
		
	}

	public function check_email_existance()
	{
		$email = $this->input->post('email');
		$this->load->model('Signupmodel');
		$res = $this->Signupmodel->check_email_existance($email);

		if($res)
		{
			echo json_encode($res);
		}
		else
		{
			echo json_encode(0);
		}
	}


	//fetching section wise questions
	public function fetch()
	{
		$table = $this->input->post('table');
		$section = $this->input->post('section');
		// $test_id = $this->input->post('test_id');

		// echo $table; exit;
		$this->load->model('Tests');
		// $c = 1;
		// for($c = 1; $c <= 20; $c++) {
		$data =  $this->Tests->fetch_section_wise_question($table, $section);


		foreach($data as $d) 
			echo json_encode($d);
		
		
	}
}