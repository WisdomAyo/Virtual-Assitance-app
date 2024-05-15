<?php

namespace App\Services;

use App\Notifications\ReferralEmail;
use App\Services\SmsService;
use App\Services\WhatsappService;
use App\Notifications\Email;
use App\Notifications\ForgetPassword;
use Illuminate\Support\Facades\Notification;

class OtpService
{
  protected $phonenumber;
  protected $emailaddress;

  protected $otpCode;

  public function __construct($mode = "sms", $phonenumber = "", $emailaddress="", $otpCode= "")
  {
      // Set Email
      if (filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
        $this->emailaddress = $emailaddress;
      }

      // Set Phone Number
      if(strlen($phonenumber) == 11){
        $this->phonenumber = $phonenumber;
      }

      if(empty($otpCode)) {
          $this->generateOtpCode();
      }else {
          $this->otpCode = $otpCode;
      }


  }

  private function generateOtpCode()
  {
      $this->otpCode = rand(100000, 999999);
  }

  public function sendOtp($mode = null)
  {
    if(empty($mode))
    {
        if (filter_var($this->emailaddress, FILTER_VALIDATE_EMAIL)) {
           $this->sendViaEmail();
        }

        if( (!empty($this->phonenumber)) &&  (strlen($this->phonenumber) == 11) ){
            $this->sendViaSms();
            $this->sendViaWhatsapp();
        }
    }else{
        switch($mode){
          case "sms":
             $this->sendViaSms();
          break;

          case "email":
             $this->sendViaEmail();
          break;

          case "whatsapp":
             $this->sendViaWhatsapp();
          break;
        }
    }

    return $this->returnResponse();
  }

  public function sendViaSms($phonenumber = null)
  {
        if(strlen($phonenumber) == 11){
            $this->phonenumber = $phonenumber;
        }

        $to = $this->phonenumber;
        $from = "Capricorn";
        $message = "Your One time Password (OTP) is: " . $this->otpCode;

        $smsService = new SmsService();
        $smsService->sendMessage($to, $from, $message);

  }

  public function sendViaEmail($emailaddress = null)
  {
      // sendvia email
      if (filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
        $this->emailaddress = $emailaddress;
      }

       // Notify Institution
       Notification::route('mail', $this->emailaddress)
       ->notify(new Email($this->otpCode));
  }

  public function sendViaWhatsapp($phonenumber = null)
  {
      // send via whatsapp
      if(strlen($phonenumber) == 11){
        $this->phonenumber = $phonenumber;
      }

      $whatsappService = new WhatsappService;
      $whatsappService->send($this->phonenumber, $this->otpCode);

  }


    public function sendForgetPasswordEmail($email,$password)
    {
        // sendvia email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->emailaddress = $email;
        }

        // Notify Referrals
        Notification::route('mail', $this->emailaddress)
            ->notifyNow(new ForgetPassword($email,$password));
    }

  public function returnResponse()
  {
      return $this->getGeneratedOtp();
  }

  public function getGeneratedOtp()
  {
      return $this->otpCode;
  }
}
