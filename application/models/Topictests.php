<?php



class Topictests extends CI_Model
{

	public function index()
	{

	}

	public function questions($course, $test_id) //fetching all question from database to display in  question list
	{
		$res = $this->db
					->select(['Q_no','question','answer'])
					->where('test_id',$test_id)
					->from($course)
					->get();
		return $res->result();
		// print_r($res->result());exit;
	}

	public function add_user($d,$user_id, $test_types, $test_id)  //add new user in user session table
	{
		$q = $this->db->where(['user_id'=>$user_id,'test_type'=>$test_types,'test_id'=>$test_id]) //checking user already exists or not
						->get('user_session');

		if($q->num_rows() != 1) //if user not exists then insert into user session table
		{
			return $this->db->insert('user_session',$d);
		}
		return $q->num_rows();
	}



	public function save_ans($ans,$course,$c_testid,$c_q_no,$user)
	{

		$test_name = $course.$c_testid; //concat course & id = test_id (like ibps_po01)	

		$res1 = $this->db->where(['user_id'=>$user,'test_id'=>$test_name,'Q_no'=>$c_q_no]) //cheacking ans is already saved or not
						->get('topictest_answers');


		$dat = date('d-m-y');  //getting current date
		if($res1->num_rows() ) //if ans is saved then updating new ans
		{
			return $this->db->where(['user_id'=>$user,'test_id'=>$test_name,'Q_no'=>$c_q_no])
						->set('ans',$ans)
						->update('topictest_answers');
		}
		else 
		{
			$data = array(
				'user_id'=>$user,
				'test_id'=>$test_name,
				'Q_no'=>$c_q_no,
				'date' => $dat,
				'ans'=>$ans
			);

			return $this->db->insert('topictest_answers',$data); // //if ans is not saved inserting new ans
		}	

	}

	public function end_test($course, $test_name, $test_id, $user)	//end test
		{
			$arr="";
			$c_ans = 0;
			$w_ans = 0;
			$da1 = $this->db->select(['Q_no','ans'])  //t1 = original answer table & t2 = mocktest_answer table
							->from('mocktest_answers')
							->where(['user_id'=>$user,'test_id'=>$test_name])
							->get();
			// $arr = array();
			foreach ($da1->result() as $data) {
				$ans = $data->ans;
				$Q_nos = $data->Q_no;

				$da = $this->db->where(['test_id'=>$test_id,'Q_no'=>$Q_nos,'answer'=>$ans])
							->get($course); 
				if($da->num_rows() == 1)
				{
					$c_ans = $c_ans + 1; //correct answer
				}
				else {
					$w_ans = $w_ans + 1;	//wrong answer
				}
			}
			$total_attempt = $c_ans + $w_ans;
			$marks = $c_ans -($w_ans*(0.25));
			$data_array = array("user_id"=>$user,"test_id"=>$test_name,"wrong_ans"=>$w_ans,"right_ans"=>$c_ans,"marks"=>$marks,'attempt'=>$total_attempt);

			$y = $this->db->where(['user_id'=>$user,'test_id'=>$test_name])  //cheking data is already exists or not
							->from('test_result')
							->get();

			if($y->num_rows() == 0)  //if data not exists in table 
			{
				$this->db->insert('test_result',$data_array);  //  then insert
			}
			$this->db->where(['user_id'=>$user,'test_id'=>$test_name])
							->set('end_test',"1")
							->update('user_session');


			$data = $this->db->select(['session_time'])	//fetch session time fron test_result table
							->from('user_session')
							->where(['user_id'=>$user,'test_id'=>$test_name])
							->get();

			$data_array = array("arr1"=>$data_array,"arr2"=>$data->result());
			
			return $data_array;
			// return $data->result();
		}

	public function fetch_user_session_time($user,$test_id)
	{
		$time_res = $this->db->select('session_time')
				->from('user_session')
				->where(['user_id'=>$user,'test_id'=>$test_id])
				->get();
				foreach ($time_res->result() as $times) {
					return $times->session_time;
				}
		
	}

	public function save_time($user_id,$test_id,$time) //save time to table user_session using ajax
	{
		$qqq = $this->db->where(['user_id'=>$user_id,'test_id'=>$test_id])
				->set('session_time',$time)
				->update('user_session');
		return $qqq;
		// return $qqq->result();

	}

	public function check_status($user, $test)
	{
		$r =  $this->db->select('end_test')
						->from('user_session')
						->where(['user_id'=>$user,'test_id'=>$test])
						->get();

		return $r->result();
	}

}