<?php

class Signup extends CI_Controller
{
	public function index()
	{
		$this->load->view('signup');
		
	}

	public function add()
	{
		$data = $this->input->post();
		unset($data['submit']);
		$email = $data['email'];
		$name = $data['name'];
		$this->load->model('Signupmodel','Signup');
		$res = $this->Signup->check_email_existance($email);
		if($res) 
		{
			echo json_encode(100);
		}
		else
		{
			if( $this->Signup->Sign_Up($data) )
			{
				//$this->send_joinning_message($name);
				echo json_encode(1);	
			}
			else
			{
				echo json_encode(0);
			}
		}
	}

	function send_joinning_message($name)
	{
        $field = array(
            "sender_id" => "FSTSMS",
            "language" => "unicode",
            "route" => "p",
            "numbers" => "8340162505",
            "message" => "Hi $name, Thank you for choosing Pre-exams! Have a good career!"
        );
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($field),
        CURLOPT_HTTPHEADER => array(
	        "authorization: TfvsHVFMbrBU7OQwIE8pgj3ynSeXDz2JiuChPKZo5RAxlqY4tNplVLray2wmHfFEghsAPxnGRtDNSij8",
	        "cache-control: no-cache",
	        "accept: */*",
	        "content-type: application/json"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) 
        {
        	echo "cURL Error #:" . $err;
        }
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->helper('url');
	}
}