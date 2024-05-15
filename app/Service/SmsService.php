<?php

namespace App\Services;

use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Client;

class SmsService
{
    protected $phoneNumbers;
    protected $from;
    protected $message;
    private $auth;
    protected $baseUrl;
    protected $endpoint;
    protected $baxiBaseUrl;
    protected $baxiEndPoint;
    private $client;


    public function __construct()
    {
        // Old Provider
        $this->auth = base64_encode('xxx');

        // New Provider
        $this->baseUrl = "";
        $this->endpoint = "/api/notification/notification/send";
    }

    public function sendMessage($to = '', $from = '', $message = '')
    {
       if(!empty($to)){
            $this->phoneNumbers = $to;
            $this->from = $from;
            $this->message = $message;

            if(! is_array($this->phoneNumbers))
            {
                $this->phoneNumbers = '234'.substr($this->phoneNumbers, 1);
            }else{
                $phones = [];

                foreach($this->phoneNumbers as $key => $phone)
                {
                    array_push($phones, '234'.substr($phone, 1));
                }

                $this->phoneNumbers = $phones;
            }

            return $this->sendSms();
       }else{

           return false;
       }
    }

    public function sendSms()
    {
        $this->client = new Client([
            'headers' => [
                'Accept'=> 'application/json',
                'Content-Type' => 'application/json',
                // 'Authorization' => 'Basic '. $this->auth   (OLD AUTH)
            ],
            'connect_timeout' => 60
        ]);

        $airtel = ["0802","0808","0812","0701","0708","0902","0907","0901"];
        $etisalat = ["0809","0817","0818","0908","0909"];

        $prefix = "0".substr($this->phoneNumbers, 3, 3);

        if(in_array($prefix, $airtel) || in_array($prefix, $etisalat)){
            $sender = "SwiftedgeVA";
        }else{
            $sender = "SwiftedgeVA";
        }

        $options = [];

        // New Options
        $options['json'] = [
            "message"  => $this->message,
            "sender_id" => $sender,
            "receiver_phone_no"=> $this->phoneNumbers,
            "notification_type"=> "sms",
            "subject" => "",
            "message_text" => $this->message,
            "receiver_email" => ""
        ];

        try{
            $response = $this->client->post($this->baseUrl.$this->endpoint, $options);
            $status_code = $response->getStatusCode();
            $body = json_decode($response->getBody());

            return  ($status_code == 200) ? true : false;

        }catch(TransferException $e)
        {
            return false;
        }
    }
}
