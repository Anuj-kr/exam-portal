<?php

class Tests extends CI_Model
{

	public function index($course)
	{
		// $res = $this->db
		// 		->select(*)
		// 		->from('mocktest')
		// 		->get();
		// return $res->result();
	}
	public function ibps_po($course) //fetch ibps_po tests
	{
		$res = $this->db
					->select(['test_id','test_type','link'])
					->from('mocktest')
					->where(['test_type'=>$course])
					->get();
				// print_r($res->result());exit;
		return $res->result();
	}

	public function fetch_test_status($user)
	{
		$res1 = $this->db->select(['test_id','end_test'])
						->from('user_session')
						->where(['user_id'=>$user])
						->get();
						// print_r($res1->result());exit;
		return $res1->result();
	}
	public function next_prev($q_no,$course,$test_id,$users_id) //getting first questin and first answer(if available)
	{
		// print_r($q_no);
		// $moc = "mocktest_answers";
		// $users_id = "aaaa";
		$full_test_id = $course.$test_id;
		$qq = $this->db->where(['user_id'=>$users_id,'test_id'=>$full_test_id,'Q_no'=>$q_no])
						->get('mocktest_answers');

		if($qq->num_rows()) 
		{
			$data = $this->db->select(['t1.*','t2.ans'])
					->from($course.' t1, mocktest_answers as t2') // making alias of both table as t1 and t2 
					->where(['t1.test_id'=>$test_id,'t1.Q_no'=>$q_no])
					->where(['t2.user_id'=>$users_id, 't2.test_id'=>$full_test_id, 't2.Q_no'=>$q_no])
					->get();
			return $data->result();

			// $this->db->from(''.$table1.' t1');
   //  $this->db->join(''.$table2.' t2','t1.'.$t1id.'=t2.'.$t2id);
				// print_r($data->result());
		}
		else
		{
			$d = $this->db->select(['*'])
					->from($course)
					->where(['test_id'=>$test_id,'Q_no'=>$q_no])
					->get();
			return $d->result();
			// print_r($d->result());exit;
		}
			// print_r($data->result());exit;

		// $this->db->select('t1.field, t2.field2')
  //         ->from('table1 AS t1, table2 AS t2')
  //         ->where('t1.id = t2.table1_id')
  //         ->where('t1.user_id', $user_id);
	}

	

	// public function fetch_ans_for_radio($u_id, $test_id, $q_no)
	// {
	// 	// $u_id = "aaaa";
	// 	// $test_id = "ibps_po01";
	// 	$ans = $this->db->select(['answer'])
	// 						->where(['user_id'=>$u_id,'test_id'=>$test_id,'Q_no'=>$q_no])
	// 						->from('mocktest_answers')
	// 						->get();
	// 	return $ans->result();
	// 	// print_r($answer->result());
	// }

	//check email is already registered or not
	

	public function fetch_section_wise_question($table, $section)
	{
		$data =  $this->db->select(['Q_no','question'])
							->from($table)
							->where(['topic'=>'apptitude'])
							->get();

		return $data->result();
	}

}