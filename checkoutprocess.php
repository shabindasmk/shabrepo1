<?php
// Set request-specific fields.
include_once("paypaldirectpro.php");
$paymentType = urlencode(PAYPAL_PAY_TYPE); // 'Authorization' or 'Sale'
$firstName = urlencode($_POST['customer_first_name']);
$lastName = urlencode($_POST['customer_last_name']);
$creditCardType = urlencode($_POST['customer_credit_card_type']);
$creditCardNumber = urlencode($_POST['customer_credit_card_number']);
$expDateMonth = $_POST['cc_expiration_month'];
// Month must be padded with leading zero
$padDateMonth = urlencode(str_pad($expDateMonth, 2, '0', STR_PAD_LEFT));
 
$expDateYear = urlencode($_POST['cc_expiration_year']);
$cvv2Number = urlencode($_POST['cc_cvv2_number']);
$address1 = urlencode($_POST['customer_address1']);
$address2 = urlencode($_POST['customer_address2']);
$city = urlencode($_POST['customer_city']);
$state = urlencode($_POST['customer_state']);
$zip = urlencode($_POST['customer_zip']);
$country = urlencode($_POST['customer_country']); // US or other valid country code
$amount = urlencode($_POST['example_payment_amuont']);
$currencyID = urlencode('USD'); // or other currency ('GBP', 'EUR', 'JPY', 'CAD', 'AUD')
 
// Add request-specific fields to the request string.
$nvpStr = "&PAYMENTACTION=$paymentType&AMT=$amount&CREDITCARDTYPE=$creditCardType&ACCT=$creditCardNumber".
"&EXPDATE=$padDateMonth$expDateYear&CVV2=$cvv2Number&FIRSTNAME=$firstName&LASTNAME=$lastName".
"&STREET=$address1&CITY=$city&STATE=$state&ZIP=$zip&COUNTRYCODE=$country&CURRENCYCODE=$currencyID";
$paypalObj=new paypal_direct_pro();

// Execute the API operation; see the PPHttpPost function above.
$httpParsedResponseAr = $paypalObj->PPHttpPost('DoDirectPayment', $nvpStr);
 //print_R($httpParsedResponseAr); exit();
if("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])) {
//exit('Direct Payment Completed Successfully: '.print_r($httpParsedResponseAr, true));
    $txnId=$httpParsedResponseAr["TRANSACTIONID"];
    header("location:return.php?txn=$txnId");
} else {
//exit('DoDirectPayment failed: ' . print_r($httpParsedResponseAr, true));
    header("location:return.php");
}
?>
