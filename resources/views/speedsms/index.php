<?php
require("SpeedSMSAPIController.php");
require("TwoFactorAPIController.php");

function getUserInfo()
 {
    $sms = new SpeedSMSAPI("zAoxjXrfHCOkvREkp9WcM8q7Arzfl_SO");
    $userInfo = $sms->getUserInfo();
    var_dump($userInfo);
}

function sendSMS($phone, $content)
{
    $sms = new SpeedSMSAPI("zAoxjXrfHCOkvREkp9WcM8q7Arzfl_SO");
    $return = $sms->sendSMS([$phone], $content, SpeedSMSAPI::SMS_TYPE_CSKH, "Text funcion");
    var_dump($return);
}

//$content contain OTP conde only
function sendVoiceOTP($phone, $content)
{
    $sms = new SpeedSMSAPI("zAoxjXrfHCOkvREkp9WcM8q7Arzfl_SO");
    $return = $sms->sendVoice($phone, $content);
    var_dump($return);
}

function createPIN($phone, $content, $appId) 
{
    $twoFA = new TwoFactorAPI("zAoxjXrfHCOkvREkp9WcM8q7Arzfl_SO");
    $result = $twoFA->pinCreate($phone, $content, $appId);
    var_dump($result);

}

function verifyPIN($phone, $pinCode, $appId) 
{
    $twoFA = new TwoFactorAPI("zAoxjXrfHCOkvREkp9WcM8q7Arzfl_SO");
    $result = $twoFA->pinVerify($phone, $pinCode, $appId);
    var_dump($result);
}

function sendMMS($phone, $content, $link) 
{
    $sms = new SpeedSMSAPI("zAoxjXrfHCOkvREkp9WcM8q7Arzfl_SO");
    $return = $sms->sendMMS([$phone], $content, $link, "device id");
    var_dump($return);
}


//using send voice OTP
//sendVoiceOTP("849xxxxx", "1234");
