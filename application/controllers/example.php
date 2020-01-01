<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

    function test()
    {

        $field = array(
            "sender_id" => "FSTSMS",
            "language" => "unicode",
            "route" => "p",
            "numbers" => "9308656986",
            "message" => "Thank you for choosing Pre-exams! Have a good career!"
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
        else 
        {
          echo $response;
        }
    }
}

