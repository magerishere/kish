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

use App\Http\Requests\trySendMessageRequest;
use App\Jobs\SendSmsVerificationJob;
use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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


    public function trySendMessage(trySendMessageRequest $request)
    {
       $validator = Validator::make($request->all(),[trySendMessageRequest::class]);

        if($validator->fails()) {
            return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
        }

        try {
                if($request->has('email'))
                {
                    if(User::where('email',$request->email)->first())
                    {
                        return response()->json(['has_email'=>1]);
                    }
                    return response()->json(['has_email'=>0]);
                }
                date_default_timezone_set("Asia/Tehran");

                // your mobile numbers
                $MobileNumbers = array($request->phone_number);

                $code = rand(100000,999999);

                // your text messages
                $Messages = array('کد تایید شما ' . $code);

                // sending date
                @$SendDateTime = date("Y-m-d")."T".date("H:i:s");

                dispatch(new SendSmsVerificationJob($MobileNumbers,$Messages,$SendDateTime));

                if($user = User::where('phone_number',$request->phone_number)->first())
                {
                   $phone_number = VerificationCode::where('phone_number',$MobileNumbers[0])->first();
                   if($phone_number)
                   {
                       $phone_number->update(['code'=>$code]);
                   } else {
                        VerificationCode::create([
                            'phone_number' => $request->phone_number,'code' => $code
                        ]);
                   }

                    return response()->json(['has_number'=>1]); // user registered ago

                } else if(!$user && VerificationCode::where('phone_number',$MobileNumbers[0])->first()) {

                        VerificationCode::where('phone_number',$MobileNumbers)->first()->update([
                            'code' => $code,
                        ]);
                    return response()->json(['has_number'=>0]);

                } else {

                    VerificationCode::create([
                        'phone_number' => $request->phone_number,
                        'code' => $code,
                    ]);
                    return response()->json(['has_number'=>0,'create'=>'create']);
                }

            } catch (Exeption $e) {
                echo 'Error SendMessage : '.$e->getMessage();
            }


    }
}




