<?php

namespace App\Http\Controllers;
/**
 * ReceiveMessageByLastId File Restful API PHP Sample Codes
 *
 * PHP version 5.6.23 | 7.2.12
 *
 * @category  PHPSampleCodes
 * @package   SampleCodes

 * @copyright 2018 The Ide Pardazan (ipe.ir) PHP Group. All rights reserved.
 * @license   https://sms.ir/ ipe license

 * @version   IPE: 2.0
 * @link      https://sms.ir/ Documentation of sms.ir Restful API PHP Sample Codes.
 */

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * ReceiveMessageByLastId Class Restful API PHP Sample Codes
 *
 * @category  PHPSampleCodesClass
 * @package   SampleCodesClass

 * @copyright 2018 The Ide Pardazan (ipe.ir) PHP Group. All rights reserved.
 * @license   https://sms.ir/ ipe license
 * @link      https://sms.ir/ Documentation of sms.ir
 */
class SmsController extends Controller
{

    /**
     * Gets API Message Send Url.
     *
     * @return string Indicates the Url
     */
    protected function getAPIMessageSendUrl()
    {
        return "api/MessageSend";
    }

    /**
     * Gets Api Token Url.
     *
     * @return string Indicates the Url
     */
    protected function getApiTokenUrl()
    {
        return "api/Token";
    }

    /**
     * Gets config parameters for sending request.
     *
     * @param string $APIKey     API Key
     * @param string $SecretKey  Secret Key
     * @param string $LineNumber Line Number
     * @param string $APIURL     API URL

     *
     * @return void
     */
    public function __construct()
    {
        $this->APIKey = env('APIKeySms');
        $this->SecretKey = env('SecretKeySms');
        $this->LineNumber = env('LineNumberSms');
        $this->APIURL = env('APIURLSms');

    }

    /**
     * Send sms.
     *
     * @param MobileNumbers[] $MobileNumbers array structure of mobile numbers
     * @param Messages[]     $Messages      array structure of messages
     * @param string          $SendDateTime  Send Date Time

     *
     * @return string Indicates the sent sms result
     */

    public function sendMessage($MobileNumbers, $Messages, $SendDateTime = '')
    {
        $token = $this->_getToken($this->APIKey, $this->SecretKey);

        if ($token != false) {
            $postData = array(
                'Messages' => $Messages,
                'MobileNumbers' => $MobileNumbers,
                'LineNumber' => $this->LineNumber,
                'SendDateTime' => $SendDateTime,
                'CanContinueInCaseOfError' => 'false'
            );

            $url = $this->APIURL.$this->getAPIMessageSendUrl();
            $SendMessage = $this->_execute($postData, $url, $token);
            $object = json_decode($SendMessage);

            $result = false;
            if (is_object($object)) {
                $result = $object->Message;
            } else {
                $result = false;
            }
        } else {
            $result = false;
        }
        return $result;
    }

    /**
     * Gets token key for all web service requests.
     *
     * @return string Indicates the token key

     */
    private function _getToken()
    {
        $postData = array(
            'UserApiKey' => $this->APIKey,
            'SecretKey' => $this->SecretKey,
            'System' => 'php_rest_v_2_0'
        );
        $postString = json_encode($postData);

        $ch = curl_init($this->APIURL.$this->getApiTokenUrl());
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, array(

                'Content-Type: application/json'
            )
        );
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

        $result = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($result);

        $resp = false;
        $IsSuccessful = '';
        $TokenKey = '';
        if (is_object($response)) {
            $IsSuccessful = $response->IsSuccessful;
            if ($IsSuccessful == true) {
                $TokenKey = $response->TokenKey;
                $resp = $TokenKey;
            } else {
                $resp = false;
            }
        }
        return $resp;
    }


    /**
     * Executes the main method.
     *
     * @param postData[] $postData array of json data
     * @param string     $url      url
     * @param string     $token    token string
     *
     * @return string Indicates the curl execute result
     */
    private function _execute($postData, $url, $token)
    {

        $postString = json_encode($postData);

        $ch = curl_init($url);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'x-sms-ir-secure-token: '.$token
            )
        );
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }


    public function trySendMessage(Request $request)
    {

        // try {
                if(DB::select('select * from verification_code where phone_number = ?', array($request->phone_number)))
                {
                    return response()->json(['has_number'=>1]);

                } else {


                date_default_timezone_set("Asia/Tehran");

                // your mobile numbers
                $MobileNumbers = array($request->phone_number);

                $code = rand(100000,999999);

                // your text messages
                $Messages = array('کد تایید شما ' . $code);

                // sending date
                @$SendDateTime = date("Y-m-d")."T".date("H:i:s");

                $SmsIR_SendMessage = new SmsController();
                $SendMessage = $SmsIR_SendMessage->sendMessage($MobileNumbers, $Messages, $SendDateTime);

                    DB::table('verification_code')->insert([
                        'phone_number' => $MobileNumbers[0],
                        'code' => $code,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);

                var_dump($SendMessage);

                }

            // } catch (Exeption $e) {
                // echo 'Error SendMessage : '.$e->getMessage();
            // }


    }
}




