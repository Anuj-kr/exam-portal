<?php


class DoTest extends CI_Controller{
	

	public function index() //for next prev  question
	{
		//getting next_prev question
		$course = $this->input->post('course');
		$test_id = $this->input->post('testid');
		$q_no = $this->input->post('q_no');
		$u_id = $this->input->post('email');
		
		$this->load->model('Tests');
		$ques = $this->Tests->next_prev($q_no,$course,$test_id, $u_id); //fetch next/prev question


		//getting a particular test answer to cheack out  the radio buttons
		// $full_test_id = $course.$test_id;
		// print_r($email);
		// $ar1 = $this->Tests->fetch_ans_for_radio($u_id, $full_test_id, $q_no);
		// print_r($email);
		foreach ($ques as $a1)
			 echo json_encode($a1);
		
	}

	public function mocktest()	//to get first question from database
	{
		$course = $_GET['course'];
		$test_id = $_GET['testid'];
		// print_r($course);
		// print_r($test_id);
		$this->load->model('Mocktestmodel');
		$data = $this->Mocktestmodel->questions($course, $test_id);


		//to insert userid  and testid in mocktest_answer table
		$user = $this->session->userdata('email');
		$test_types = $this->uri->segment(2);
		$testsid = $course.$test_id;
		$u_data = array("user_id"=>$user,"test_type"=>$test_types,"test_id"=>$testsid,"date"=>date('d-m-y'),"session_time"=>"1:20:00");
		$this->Mocktestmodel->add_user($u_data, $user, $test_types, $testsid);

		$times = $this->Mocktestmodel->fetch_user_session_time($user,$testsid);
		// print_r($times);
		$q_no = 1;//$this->session->userdata('q_no');
		// print_r($q_no);exit;
		$this->load->model('Tests');
		$q = $this->Tests->next_prev($q_no,$course,$test_id, $user);

		$this->load->view('doTest', ['ques_list'=> $data,'questions'=>$q,'session_time'=>$times]);

	}

	public function save_answer() 
	{
		$userid = $this->session->userdata('email');
		$ans = $this->input->post('ans');
		$course = $this->input->post('course');
		$c_testid = $this->input->post('testid');
		$c_q_no = $this->input->post('Q_no');
		$test_type = $this->input->post('test_type');

		$this->load->model('Mocktestmodel');
		$qqq =  $this->Mocktestmodel->save_ans($ans, $course, $c_testid, $c_q_no, $userid);
		
		echo json_encode($qqq);
		
		
	}

	public function save_session_time()
	{
		$time = $this->input->post('session_time');
		$user_id = $this->input->post('user_id');
		$test_id = $this->input->post('test_id');
		$this->load->model('Mocktestmodel');
		$q_res = $this->Mocktestmodel->save_time($user_id,$test_id,$time);
		echo json_encode($q_res);
	}

	public function endtest()
	{
		// $course = $this->uri->segment(3);
		// $test_id = $this->uri->segment(4);

		$course = $_GET['course'];
		$test_id = $_GET['testid'];

		$test_name = $course.$test_id;
		$user = $this->session->userdata('email');
		// echo "endtest";
		$this->load->model('Mocktestmodel');
		$data_array = $this->Mocktestmodel->end_test($course, $test_name, $test_id, $user);

		$arr1 = $data_array['arr1'];
		$end_test = $data_array['arr2'];

		foreach ($end_test as $end) {
			$time_taken = $end->session_time;
		}
		
		// print_r($data_array);exit;

		$this->load->view('result',['array_set'=>$arr1,'time'=>$time_taken]);


	}
	public function inst() //instruction page
	{ 
		$this->load->view('instruction.php');
		$this->session->set_userdata('q_no','1');
	}


	public function check_test_status()
	{
		$user = $this->input->post('user_id');
		$test_id = $this->input->post('test_id');
		$x = 0;

		$this->load->model('Mocktestmodel');
		$res = $this->Mocktestmodel->check_status($user, $test_id);
		foreach($res as $r)
			$x = $r->end_test;
		if($x == 1)
		{
			echo ($x);
		}
		
	}

}