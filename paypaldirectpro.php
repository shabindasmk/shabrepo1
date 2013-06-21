<?php

/*
* To change this template, choose Tools | Templates
* and open the template in the editor.
*/
include_once("config.php");
class paypal_direct_pro
{
    public $environment;
    public $API_UserName;
    public $API_Password;
    public $API_Signature;
    public $API_Endpoint;
    
    /**
* Send HTTP POST Request
*
* @param string The API method name
* @param string The POST Message fields in &name=value pair format
* @return array Parsed HTTP Response body
*/
    public function PPHttpPost($methodName_, $nvpStr_)
    {

        $this->environment=PAYPAL_PRO_ENV;
// Set up your API credentials, PayPal end point, and API version.
$API_UserName = urlencode(PAYPAL_PRO_API_UNAME); // set your spi username
$API_Password = urlencode(PAYPAL_PRO_API_PWD); // set your spi password
$API_Signature = urlencode(PAYPAL_PRO_API_SIG); // set your spi Signature

$API_Endpoint = PAYPAL_PRO_API_URL;
if("sandbox" === $this->environment || "beta-sandbox" === $this->environment) {
$API_Endpoint = "https://api-3t.$this->environment.paypal.com/nvp";
}
$version = urlencode(PAYPAL_PRO_API_VER);
 
// Set the curl parameters.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $API_Endpoint);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
 
// Turn off the server and peer verification (TrustManager Concept).
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
 
// Set the API operation, version, and API signature in the request.
$nvpreq = "METHOD=$methodName_&VERSION=$version&PWD=$API_Password&USER=$API_UserName&SIGNATURE=$API_Signature$nvpStr_";
 
// Set the request as a POST FIELD for curl.
curl_setopt($ch, CURLOPT_POSTFIELDS, $nvpreq);
 
// Get response from the server.
$httpResponse = curl_exec($ch);
 
if(!$httpResponse) {
exit("$methodName_ failed: ".curl_error($ch).'('.curl_errno($ch).')');
}
 
// Extract the response details.
$httpResponseAr = explode("&", $httpResponse);
 
$httpParsedResponseAr = array();
foreach ($httpResponseAr as $i => $value) {
$tmpAr = explode("=", $value);
if(sizeof($tmpAr) > 1) {
$httpParsedResponseAr[$tmpAr[0]] = $tmpAr[1];
}
}
 
if((0 == sizeof($httpParsedResponseAr)) || !array_key_exists('ACK', $httpParsedResponseAr)) {
exit("Invalid HTTP Response for POST request($nvpreq) to $API_Endpoint.");
}
 
return $httpParsedResponseAr;
}
}
?>
