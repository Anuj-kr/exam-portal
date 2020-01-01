<?php

class Topictest extends CI_Controller{
	
	//getting question list ans first question ********
	public function index()
	{

		$course = $_GET['course'];
		$testid = $_GET['testid'];
		$u_id = $this->session->userdata('email');
		// print_r("anuj");exit;

		$this->load->model('Topictests');
		$data = $this->Topictests->questions($course, $testid);

		$ans_table = "topictest_answers"; //for getting ans of the first ques if already saved
		
		//	first question
		$q_no = 1;
		$this->load->model('Tests');

		$q = $this->Tests->next_prev($q_no, $course, $testid, $u_id,$ans_table);


		//inserting user, course and testid in user session table
		$user = $this->session->userdata('email');
		$test_types = $this->uri->segment(1);
		$testsid = $course.$testid;
		$u_data = array("user_id"=>$user,"test_type"=>$test_types,"test_id"=>$testsid,"date"=>date('d-m-y'),"session_time"=>"0:20:00");
		$this->Topictests->add_user($u_data, $user, $test_types, $testsid);


		//fetching time for the test
		$times = $this->Topictests->fetch_user_session_time($user,$testsid);


		//loading views
		// $ans = $q['ans'];
		// $ques = $q['ques'];
		// if($ans == "") 
		// {
			$this->load->view('doTest', ['ques_list'=> $data,'questions'=>$q,'session_time'=>$times]);
		// }
		// else 
		// {
		// 	$this->load->view('doTest', ['ques_list'=> $data,'questions'=>$ques,'session_time'=>$times,'ans'=>$ans]);
		// }
		// $this->load->view('doTest', ['ques_list'=> $data,'questions'=>$q,'session_time'=>$times]);

	}

	public function inst()
	{
		$this->load->view('topic_inst');
	}
}