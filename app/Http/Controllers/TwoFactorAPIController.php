<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;

class TwoFactorAPIController extends Controller 
{
    private $ROOT_URL = "https://api.speedsms.vn/index.php";
    private $accessToken = "zAoxjXrfHCOkvREkp9WcM8q7Arzfl_SO";
	function __construct($api_key) {
		$this->accessToken = $api_key;
	}
	
    public function pinCreate($phoneNumber, $content, $appId) {

        $json = json_encode(array('to' => $phoneNumber, 'content' => $content, 'app_id' => $appId));

        $headers = array('Content-type: application/json');

        $url = $this->ROOT_URL.'/pin/create';
        $http = curl_init($url);
        curl_setopt($http, CURLOPT_HEADER, false);
        curl_setopt($http, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($http, CURLOPT_POSTFIELDS, $json);
        curl_setopt($http, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($http, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($http, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($http, CURLOPT_VERBOSE, 0);
        curl_setopt($http, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($http, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($http, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($http, CURLOPT_USERPWD, $this->accessToken.':x');
        $result = curl_exec($http);
        if(curl_errno($http))
        {
            return null;
        }
        else
        {
            curl_close($http);
            return json_decode($result, true);
        }
    }

    public function pinVerify($phoneNumber, $pinCode, $appId) {
        $json = json_encode(array('phone' => $phoneNumber, 'pin_code' => $pinCode, 'app_id' => $appId));

        $headers = array('Content-type: application/json');

        $url = $this->ROOT_URL.'/pin/verify';
        $http = curl_init($url);
        curl_setopt($http, CURLOPT_HEADER, false);
        curl_setopt($http, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($http, CURLOPT_POSTFIELDS, $json);
        curl_setopt($http, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($http, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($http, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($http, CURLOPT_VERBOSE, 0);
        curl_setopt($http, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($http, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($http, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($http, CURLOPT_USERPWD, $this->accessToken.':x');
        $result = curl_exec($http);
        if(curl_errno($http))
        {
            return null;
        }
        else
        {
            curl_close($http);
            return json_decode($result, true);
        }
    }
}