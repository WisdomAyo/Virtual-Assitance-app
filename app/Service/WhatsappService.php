<?php

namespace App\Services;

use Twilio\Rest\Client;

class WhatsappService
{

    public function send($phone, $otpCode)
    {
        $sid    = "";
        $token  = "9";

        $twilio = new Client($sid, $token);

        $message = $twilio->messages
                    ->create("whatsapp:+2347035361770",
                            array(
                                "from" => "whatsapp:+",
                                "body" => $otpCode
                            )
                    );

        try{
            $message->sid;
        }catch(\Exception $e){

        }

    }

}
